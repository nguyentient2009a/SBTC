// $(document).ready(function () {
//     /*ckeditor content*/
//     let content;
//     ClassicEditor
//         .create(document.querySelector('#content'), {
//             wordCount: {
//                 displayWords: false,
//                 onUpdate: stats => {
//                     if (stats.characters > 1000) {
//                         $('#div-content-cke').addClass('div-error-cke');
//                         $('#btn-preview').attr('disabled', 'disabled');
//                         $('#singlebutton').attr('disabled', 'disabled');
//                         $('#error-content').html('Bạn đã nhập quá số lượng ký tự cho phép.').show();
//                     } else {
//                         $('#div-content-cke').removeClass('div-error-cke');
//                         $('#btn-preview').removeAttr('disabled');
//                         $('#singlebutton').removeAttr('disabled');
//                         $('#error-content').hide();
//                     }
//                 }
//             },
//             toolbar: {
//                 items: ['bold', '|', '|', 'undo', 'redo']
//             },
//             language: 'vi',
//             licenseKey: '',
//         })
//         .then(editor => {
//             window.editor = editor;
//             content = editor;
//             const wordCountPlugin = editor.plugins.get('WordCount');
//             const wordCountWrapper = document.getElementById('myCounter');
//             wordCountWrapper.appendChild(wordCountPlugin.wordCountContainer);
//         })
//         .catch(err => {
//             console.error(err.stack);
//         });
//     /*animation alert*/
//     $(".alert").fadeTo(4000, 1500).slideUp(1500, function () {
//         $(".alert").slideUp(1500);
//     });
//
//     $('#save_post').submit(function (event) {
//         let data = $('#save_post').serializeArray();
//         let dataForm = [];
//         let txtCate = '';
//         if ($('#div_parent_id').is(':visible') && $('#parent_id option:selected').text()) {
//             txtCate = $('#parent_id option:selected').text();
//         }
//         if ($('#div_group_id').is(':visible') && $('#group_id option:selected').text()) {
//             txtCate += '/' + $('#group_id option:selected').text();
//         }
//         if ($('#div_child_group_id').is(':visible') && $('#child_group_id option:selected').text()) {
//             txtCate += '/' + $('#child_group_id option:selected').text();
//         }
//
//         $.each(data, function (key, value) {
//             dataForm[value.name] = value.value;
//         });
//         if (typeof dataForm['content'] === "undefined" || dataForm['content'] == '') {
//             alert('Bạn vui lòng nhập mô tả chi tiết.');
//             $('#error-content').html('Bạn vui lòng nhập mô tả chi tiết.').show();
//             $('html,body').animate({
//                 scrollTop: $('#div__content__cke').offset().top
//             });
//             return false;
//         }
//         if (dataForm['userInfor'] == "other" && (typeof dataForm['otherUserName'] === "undefined" || dataForm['otherUserName'] == '')) {
//             alert('Vui lòng nhập tên liên hệ');
//             $('#frm_posting_user_name').focus();
//             return false;
//         }
//         if (dataForm['userInfor'] == "other" && (typeof dataForm['otherUserPhone'] === "undefined" || dataForm['otherUserPhone'] == '')) {
//             alert('Vui lòng nhập số điện thoại');
//             $('#frm_posting_user_phone').focus();
//             return false;
//         }
//         if (typeof dataForm['images[]'] === "undefined" || dataForm['images[]'] == '') {
//             alert('Bạn vui lòng tải lên ít nhất 1 ảnh.');
//             $('#error-img').html('Bạn vui lòng tải lên ít nhất 1 ảnh.').show();
//             $('html,body').animate({
//                 scrollTop: $('#div__upload__images').offset().top
//             });
//             return false;
//         }
//         $('#singlebutton').attr('disabled', 'disabled');
//
//         var paymentMethod = $('#singlebutton').data('paymentMethod');
//         var ecommerceObject = {
//             'event': 'productDetail',
//             'ecommerce': {
//                 'detail': {
//                     'products': productDetailArray
//                 },
//                 'checkout': {
//                     'actionField': {
//                         'step': '1',
//                         'option': paymentMethod
//                     },
//                     'products': productCheckoutArray
//                 }
//             }
//         };
//         dataLayer.push(ecommerceObject);
//         $('.load').show();
//         return true;
//     });
//
//     /*submit preview*/
//     $('#btn-preview, #btn-buy-service').on('click', function (e) {
//         const btnType = $(this).data('button');
//         $('#content').val(content.getData());
//         let data = $('#save_post').serializeArray();
//         let dataForm = [];
//         $.each(data, function (key, value) {
//             dataForm[value.name] = value.value;
//         });
//         let childGroup = $('.c-required').val();
//         /*Validate data form*/
//         if (typeof dataForm['parent_id'] === "undefined" || dataForm['parent_id'] == '') {
//             alert('Vui lòng chọn danh mục');
//             $('#parent_id').focus();
//         } else if (typeof dataForm['group_id'] === "undefined" || dataForm['group_id'] == '') {
//             alert('Vui lòng chọn nhóm');
//             $('#group_id').focus();
//         } else if (childGroup == null && typeof childGroup !== "undefined") {
//             alert('Vui lòng chọn nhóm');
//             $('#child_group_id').focus();
//         } else if (dataForm['title'] == '') {
//             alert('Vui lòng nhập tiêu đề');
//             $('#title').focus();
//         } else if (typeof dataForm['location_city_id'] === "undefined" || dataForm['location_city_id'] == '') {
//             alert('Vui lòng chọn Tỉnh/TP');
//             $('#location_city_id').focus();
//         } else if (typeof dataForm['location_district_id'] === "undefined" || dataForm['location_district_id'] == '') {
//             alert('Vui lòng chọn Quận/Huyện');
//             $('#location_district_id').focus();
//         } else if (typeof dataForm['location_street'] === "undefined" || dataForm['location_street'] == '') {
//             alert('Vui lòng nhập Tên đường');
//             $('#location_street').focus();
//         } else if (dataForm['userInfor'] == "other" && (typeof dataForm['otherUserName'] === "undefined" || dataForm['otherUserName'] == '')) {
//             alert('Vui lòng nhập tên liên hệ');
//             $('#frm_posting_user_name').focus();
//         } else if (dataForm['userInfor'] == "other" && (typeof dataForm['otherUserPhone'] === "undefined" || dataForm['otherUserPhone'] == '')) {
//             alert('Vui lòng nhập số điện thoại');
//             $('#frm_posting_user_phone').focus();
//         } else if (typeof dataForm['content'] === "undefined" || dataForm['content'] == '') {
//             alert('Bạn vui lòng nhập mô tả chi tiết.');
//             $('#error-content').html('Bạn vui lòng nhập mô tả chi tiết.').show();
//             $('html,body').animate({
//                 scrollTop: $('#div__content__cke').offset().top
//             });
//         } else if (typeof dataForm['images[]'] === "undefined" || dataForm['images[]'] == '') {
//             alert('Bạn vui lòng tải lên ít nhất 1 ảnh.');
//             $('#error-img').html('Bạn vui lòng tải lên ít nhất 1 ảnh.').show();
//             $('html,body').animate({
//                 scrollTop: $('#div__upload__images').offset().top
//             });
//         } else {
//             $('.load').show();
//             /*Push btnType to data form*/
//             data.push({name: 'btnType', value: btnType});
//             $.ajax({
//                 type: 'post',
//                 url: '/posts/ajax/savePostTemp',
//                 data: data
//             }).done(function (resp) {
//                 if (resp.error) {
//                     alert(resp.error);
//                     window.location.reload();
//                 } else {
//                     switch (btnType) {
//                         case 'preview':
//                             if (resp.slug == undefined && resp._id == undefined)
//                                 alert('Đã có lỗi trong quá trình xử lý!');
//                             else window.location.href = base_url + '/review/' + resp.slug + '-' + resp._id + '.html';
//                             break;
//                         case 'buySevice':
//                             window.location.href = '/dich-vu/bang-gia-dich-vu.html';
//                             break;
//                         default:
//                             alert('Lỗi! Sự kiện nút không tồn tại.');
//                             window.location.reload();
//                             break;
//                     }
//                 }
//             });
//         }
//     });
// });
