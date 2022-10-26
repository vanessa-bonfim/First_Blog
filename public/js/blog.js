tinymce.init({
    selector: '#editor'
});
//{nome: 'Pedro'} - JS
//['nome' => 'Pedro'] - PHP

let picker = new Pikaday({ 
    field: document.getElementById('datepicker'),
    format: 'YYYY-MM-DD h:mm:ss',
    i18n: {
        previousMonth : 'Previous Month',
        nextMonth     : 'Next Month',
        months        : 'Janeiro_Fevereiro_Março_Abril_Maio_Junho_Julho_Agosto_Setembro_Outubro_Novembro_Dezembro'.split('_'),
        weekdays      : 'Domingo_Segunda-Feira_Terça-Feira_Quarta-Feira_Quinta-Feira_Sexta-Feira_Sábado'.split('_'),
        weekdaysShort : 'Dom_Seg_Ter_Qua_Qui_Sex_Sáb'.split('_'),
    },
    onSelect: function() {
        console.log(this.getMoment().format('Do MMMM YYYY'));
    }
});