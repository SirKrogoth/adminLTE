//.documento
//.celular
//.telefone
//.cep

$('.celular').mask('(99) 99999-9999');
$('.telefone').mask('(99) 9999-9999');
$('.cep').mask('99999-999');

var field = '.cpf_cnpj';

$(field).keydown(function(){
    try{
        $(field).unmask();
    } catch(e){}

    var tamanho = $(field).val().length;

    if(tamanho < 11){
        $(field).mask("999.999.999-99");
    } else{
        $(field).mask("999.999.999/9999-99");
    }

    //ajustando o foco
    var elem = this;

    setTimeout(function(){
        //muda a posição do seletor
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    //Reaplico o valor para mudar o foco
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});
