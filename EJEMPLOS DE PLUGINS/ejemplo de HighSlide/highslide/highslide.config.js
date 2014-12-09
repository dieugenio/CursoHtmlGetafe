/**
*	Site-specific configuration settings for Highslide JS
*/
hs.graphicsDir = 'highslide/graphics/';
hs.showCredits = false;
hs.outlineType = 'custom';
hs.dimmingOpacity = 0.75;
hs.fadeInOut = true;
hs.transitionDuration = 50;
hs.align = 'center';
hs.marginBottom = 105;
hs.captionEval = 'this.a.title';


// Add the slideshow controller
hs.addSlideshow({
	slideshowGroup: 'group1',
	interval: 500,
	repeat: true,
	useControls: true,
	fixedControls: false,
	overlayOptions: {
		className: 'text-controls',
		opacity: 1,
		position: 'bottom center',
		offsetX: 0,
		offsetY: -60,
		relativeTo: 'viewport',
		hideOnMouseOut: false
	},
	thumbstrip: {
		mode: 'horizontal',
		position: 'bottom center',
		relativeTo: 'viewport'
	}

});

// Spanish language strings
hs.lang = {
	cssDirection: 'ltr',
	loadingText: 'Cargando...',
	loadingTitle: 'Click para cancelar',
	focusTitle: 'Click para traer al frente',
	fullExpandTitle: 'Expandir al tamaño actual',
	creditsText: 'Potenciado por <i>Highslide JS</i>',
	creditsTitle: 'Ir al home de Highslide JS',
	previousText: 'Anterior',
	nextText: 'Siguiente',
	moveText: 'Mover',
	closeText: 'Cerrar',
	closeTitle: 'Cerrar (esc)',
	resizeTitle: 'Redimensionar',
	playText: 'Iniciar',
	playTitle: 'Iniciar slideshow (barra espacio)',
	pauseText: 'Pausar',
	pauseTitle: 'Pausar slideshow (barra espacio)',
	previousTitle: 'Anterior (flecha izquierda)',
	nextTitle: 'Siguiente (flecha derecha)',
	moveTitle: 'Mover',
	fullExpandText: 'Tamaño real',
	number: 'Imagen %1 de %2',
	restoreTitle: 'Click para cerrar la imagen, click y arrastrar para mover. Usa las flechas del teclado para avanzar o retroceder.'
};

// gallery config object
var config1 = {
	slideshowGroup: 'group1',
	thumbnailId: 'thumb1',
	numberPosition: 'caption',
	transitions: ['expand', 'crossfade']
};
