$(function () {
    $('.star-rate').each(function () {
        
        var value = parseFloat($(this).data('rate'));
        var valueElement = $(this).find('.rate-value');
        var starElement = $(this).find('i');
        valueElement.width(starElement.width() * value);
    });
    
    $('.raty').raty({
        cancel: false,
        half: false,
        starType: 'i'
    });
});