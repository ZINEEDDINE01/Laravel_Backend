mix.js('resources/js/app.js', 'public/js')
	.vue() // Compiler les *.vue
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);