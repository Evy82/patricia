const typed = new Typed('.typed', {
    // strings: [
    //          '<i class="text">creatividad</i>',
    //          '<i class="text">amigos</i>', 
    //          '<i class="text">magia</i>', 
    //          '<i class="text">pasión</i>', 
    //          '<i class="text">ideas</i>', 
    //          '<i class="text">negocios</i>', 
    //          '<i class="text">empresas</i>', 
    //          '<i class="text">emprendimientos y más</i>'
    //         ],
            stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
	        typeSpeed: 75, // Velocidad en mlisegundos para poner una letra,
	        startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	        backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
	        smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	        shuffle: false, // Alterar el orden en el que escribe las palabras.
	        backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
	        loop: true, // Repetir el array de strings
	        loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
	        showCursor: true, // Mostrar cursor palpitanto
	        cursorChar: '|', // Caracter para el cursor
	        contentType: 'html', // 'html' o 'null' para texto sin formato
});

const faqs = document.querySelectorAll(".faq");

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    });

});


addEventListener('DOMContentLoaded', () => {
    var menu_items = document.querySelector('.menu_items')
    const btn_menu = document.querySelector('.btn_menu')
    if (btn_menu) {
        btn_menu.addEventListener('click', () => {
            menu_items.classList.toggle('show')
        })
    }

    const li = document.querySelectorAll('.menu_items li');
    
    li.forEach(l => {
        l.addEventListener('click', () => {
            menu_items.classList.remove('show');
        });
    })

})

