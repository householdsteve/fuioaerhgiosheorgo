/*global jQuery, Handlebars */
jQuery(function ($) {
	'use strict';

	var Utils = {
		uuid: function () {
			/*jshint bitwise:false */
			var i, random;
			var uuid = '';

			for (i = 0; i < 32; i++) {
				random = Math.random() * 16 | 0;
				if (i === 8 || i === 12 || i === 16 || i === 20) {
					uuid += '-';
				}
				uuid += (i === 12 ? 4 : (i === 16 ? (random & 3 | 8) : random)).toString(16);
			}

			return uuid;
		},
		pluralize: function (count, word) {
			return count === 1 ? word : word + 's';
		},
		store: function (namespace, data) {
			if (arguments.length > 1) {
				return localStorage.setItem(namespace, JSON.stringify(data));
			} else {
				var store = localStorage.getItem(namespace);
				return (store && JSON.parse(store)) || [];
			}
		}
	};

	var App = {
		init: function () {
			this.cacheElements();
			this.bindEvents();
			this.render();
		},
		cacheElements: function () {
			this.$maingall = $('#main-gallery');

		},
		bindEvents: function () {
			//panelOneInputs.on('click', this.toggleStyle);
		
			var slider = this.$maingall.royalSlider({
          fullscreen: {
            enabled: false,
            nativeFS: true
          },
          globalCaption:true,
          controlNavigation: 'thumbnails',
          autoScaleSlider: false, 
          autoScaleSliderWidth: 998,     
          autoScaleSliderHeight: 480,
          loop: true,
          autoHeight: false,
          imageAlignCenter: true,
          imageScaleMode: 'fit',
          navigateByClick: true,
          numImagesToPreload:2,
          arrowsNav:true,
          arrowsNavAutoHide: true,
          arrowsNavHideOnTouch: true,
          keyboardNavEnabled: true,
          fadeinLoadedSlide: true,
          autoPlay: {
              		enabled: true,
              		pauseOnHover: true
              	},
          thumbs: {
            appendSpan: true,
            firstMargin: true,
            paddingBottom: 4,
            fitInViewport:false,
            autoCenter: false,
            imageScaleMode:"fill"
          }
        }).data('royalSlider');
        
        slider.slides[0].holder.on('rsAfterContentSet', function() {
            // fires when third slide content is loaded and added to DOM
            $('.rsThumbsContainer',this.$maingall).css("opacity",1);
        });
     

		},
		render: function () {
       
		}
	};

	App.init();
});
