$(document).ready(function() {
    $('.content').pagewalkthrough({
        name: 'welcome',
        
        // Ignore stupid cookie stuff and always show walkthrough
        onCookieLoad: function() {
            $('.content').pagewalkthrough('show');
        },
        steps: [
            {
                popup: {
                    
                    content: '#type-First'
                }
            }, {
                wrapper: '.blue',
                popup: {
                    content: '#type-mid1',
                    position: 'right'
                }
            }, {
                wrapper: '.red',
                popup: {
                    content: '#type-mid2',
                    position: 'right'
                }
            }, {
                wrapper: '.green',
                popup: {
                    content: '#type-mid3',
                    position: 'right'
                }
            }, {
                wrapper: '.Blight',
                popup: {
                    content: '#type-mid4',
                    position: 'right'
                }
            }, {
                wrapper: '#light',
                popup: {
                    content: '#type-mid5',
                    position: 'right'
                }
            }, {
                popup: {
                    type: 'modal',
                    content: '#type-end',
                }
            }
        
        ]    
    });
});