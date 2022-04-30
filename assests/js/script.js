function cancela(id){
    let tag = document.querySelector(id);
    tag.value = '';
}
function bt_cancelar(){
    cancela('#box_modelo');
    cancela('#box_marca');
    cancela('#box_ano');
    cancela('#box_preco');
}
