$(document).ready(function() {

    var changeSides = function() {
        $('.ui.shape')
            .eq(0)
            .shape('flip back')
            .end()
            .eq(1)
            .shape('flip back')
            .end()
            .eq(2)
            .shape('flip back')
            .end()
            .eq(3)
            .shape('flip back')
            .end();
    };


    $('.masthead .information').transition('scale in', 1000);
    setInterval(changeSides, 3000);
});
