<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <div>
        <label for="">Chọn thành phố</label>
        <select name="" id="chooseCity">
        </select>
    </div>
    <div>
        <label for="">Chọn Quaan</label>
        <select name="" id="chooseDistrict">
        </select>
    </div>
    <div>
        <label for="">Chọn xa</label>
        <select name="" id="chooseWard">
        </select>
    </div>
</form>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('chooseCity').onchange = function () {
            loadDistrict(this.value);
        }
        document.getElementById('chooseDistrict').onchange = function () {
            loadWard(this.value);
        }
        // load thanh pho
        loadCity();
        function loadWard(districtId) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                    const listWard = JSON.parse(xhr.responseText);
                    let wardContent = '';
                    for (let i = 0; i < listWard.length; i++) {
                        const district = listWard[i];
                        wardContent += `<option value="${district.xaid}">${district.name}</option>`;
                    }
                    document.getElementById('chooseWard').innerHTML = wardContent;

                }
            }
            xhr.open('GET', `/location/ward?districtId=${districtId}`, false);
            xhr.send();
        }

        function loadDistrict(cityId) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                    const listDistrict = JSON.parse(xhr.responseText);
                    let districtContent = '';
                    for (let i = 0; i < listDistrict.length; i++) {
                        const district = listDistrict[i];
                        districtContent += `<option value="${district.maqh}">${district.name}</option>`;
                    }
                    document.getElementById('chooseDistrict').innerHTML = districtContent;
                    loadWard(document.getElementById('chooseDistrict').value);
                }
            }
            xhr.open('GET', `/location/district?cityId=${cityId}`, false);
            xhr.send();
        }

        function loadCity() {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                    const listCity = JSON.parse(xhr.responseText);
                    let cityContent = '';
                    for (let i = 0; i < listCity.length; i++) {
                        const city = listCity[i];
                        cityContent += `<option value="${city.matp}">${city.name}</option>`;
                    }
                    document.getElementById('chooseCity').innerHTML = cityContent;
                    loadDistrict(document.getElementById('chooseCity').value);
                }
            }
            xhr.open('GET', '/location/city', false);
            xhr.send();
        }
    })
</script>
</body>
</html>
