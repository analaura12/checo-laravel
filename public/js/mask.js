$('.mask_date').mask('11/11/1111');
$('.mask_time').mask('00:00:00');
$('.mask_date_time').mask('00/00/0000 00:00:00');
$('.mask_cep').mask('00000-000');
$('.mask_phone').mask('0000-0000');
$('.mask_phone_with_ddd').mask('(00)0000-0000');
$('.mask_cellphone_with_ddd').mask('(00)00000-0000');
$('.pmask_hone_us').mask('(000)000-0000');
$('.mask_mixed').mask('AAA 000-S0S');
$('.mask_cpf').mask('000.000.000-00', { reverse: true });
$('.mask_money').mask('000.000.000.000.000,00', { reverse: true });
$('.mask_multiple').mask('000000');
$('.mask_percent').mask('000.00', { reverse: true });
$(".mask_cnpj").mask("00.000.000/0000-00");

var CpfCnpjMaskBehavior = function(val) {
        return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
    },
    cpfCnpjpOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
        }
    };

$(function() {
    $('.cpfcnpj').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);
})