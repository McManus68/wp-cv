<?php 

 /*************************************************
## Custom Style
*************************************************/

function unica_custom_styling() { ?>

<style type="text/css">
<?php $tipigrof = ot_get_option( 'tipigrof', array() ); ?> 
<?php if($tipigrof) { ?>
body{ 
<?php if($tipigrof['font-color'])     { echo 'color:          '.$tipigrof['font-color'].'';      }else{ echo '';} ?>;
<?php if($tipigrof['font-family'])    { echo 'font-family:    '.$tipigrof['font-family'].'';     }else{ echo '';} ?>;
<?php if($tipigrof['font-size'])      { echo 'font-size:      '.$tipigrof['font-size'].'';       }else{ echo '';} ?>;
<?php if($tipigrof['font-style'])     { echo 'font-style:     '.$tipigrof['font-style'].'';      }else{ echo '';} ?>;
<?php if($tipigrof['font-variant'])   { echo 'font-variant:   '.$tipigrof['font-variant'].'';    }else{ echo '';} ?> ;
<?php if($tipigrof['font-weight'])    { echo 'font-weight:    '.$tipigrof['font-weight'].'';     }else{ echo '';} ?> ;
<?php if($tipigrof['letter-spacing']) { echo 'letter-spacing: '.$tipigrof['letter-spacing'].'';  }else{ echo '';} ?> ;
<?php if($tipigrof['line-height'])    { echo 'line-height:    '.$tipigrof['line-height'].'' ;    }else{ echo '';} ?> ;
<?php if($tipigrof['text-decoration']){ echo 'text-decoration:'.$tipigrof['text-decoration'].''; }else{ echo '';} ?> ;
<?php if($tipigrof['text-transform']) { echo 'text-transform: '.$tipigrof['text-transform'].'' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h1tipigrof = ot_get_option( 'h1_tipigrof', array() ); ?> 
<?php if($h1tipigrof) { ?>
h1{ 
<?php if($h1tipigrof['font-color'])     { echo 'color:          '.$h1tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h1tipigrof['font-family'])    { echo 'font-family:    '.$h1tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h1tipigrof['font-size'])      { echo 'font-size:      '.$h1tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h1tipigrof['font-style'])     { echo 'font-style:     '.$h1tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h1tipigrof['font-variant'])   { echo 'font-variant:   '.$h1tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h1tipigrof['font-weight'])    { echo 'font-weight:    '.$h1tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h1tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h1tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h1tipigrof['line-height'])    { echo 'line-height:    '.$h1tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h1tipigrof['text-decoration']){ echo 'text-decoration:'.$h1tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h1tipigrof['text-transform']) { echo 'text-transform: '.$h1tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>



<?php $h2tipigrof = ot_get_option( 'h2_tipigrof', array() ); ?> 
<?php if($h2tipigrof) { ?>
h2{ 
<?php if($h2tipigrof['font-color'])     { echo 'color:          '.$h2tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h2tipigrof['font-family'])    { echo 'font-family:    '.$h2tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h2tipigrof['font-size'])      { echo 'font-size:      '.$h2tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h2tipigrof['font-style'])     { echo 'font-style:     '.$h2tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h2tipigrof['font-variant'])   { echo 'font-variant:   '.$h2tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h2tipigrof['font-weight'])    { echo 'font-weight:    '.$h2tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h2tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h2tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h2tipigrof['line-height'])    { echo 'line-height:    '.$h2tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h2tipigrof['text-decoration']){ echo 'text-decoration:'.$h2tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h2tipigrof['text-transform']) { echo 'text-transform: '.$h2tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h3tipigrof = ot_get_option( 'h3_tipigrof', array() ); ?> 
<?php if($h3tipigrof) { ?>
h3{ 
<?php if($h3tipigrof['font-color'])     { echo 'color:          '.$h3tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h3tipigrof['font-family'])    { echo 'font-family:    '.$h3tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h3tipigrof['font-size'])      { echo 'font-size:      '.$h3tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h3tipigrof['font-style'])     { echo 'font-style:     '.$h3tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h3tipigrof['font-variant'])   { echo 'font-variant:   '.$h3tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h3tipigrof['font-weight'])    { echo 'font-weight:    '.$h3tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h3tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h3tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h3tipigrof['line-height'])    { echo 'line-height:    '.$h3tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h3tipigrof['text-decoration']){ echo 'text-decoration:'.$h3tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h3tipigrof['text-transform']) { echo 'text-transform: '.$h3tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h4tipigrof = ot_get_option( 'h4_tipigrof', array() ); ?> 
<?php if($h4tipigrof) { ?>
h4{ 
<?php if($h4tipigrof['font-color'])     { echo 'color:          '.$h4tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h4tipigrof['font-family'])    { echo 'font-family:    '.$h4tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h4tipigrof['font-size'])      { echo 'font-size:      '.$h4tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h4tipigrof['font-style'])     { echo 'font-style:     '.$h4tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h4tipigrof['font-variant'])   { echo 'font-variant:   '.$h4tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h4tipigrof['font-weight'])    { echo 'font-weight:    '.$h4tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h4tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h4tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h4tipigrof['line-height'])    { echo 'line-height:    '.$h4tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h4tipigrof['text-decoration']){ echo 'text-decoration:'.$h4tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h4tipigrof['text-transform']) { echo 'text-transform: '.$h4tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h5tipigrof = ot_get_option( 'h5_tipigrof', array() ); ?> 
<?php if($h5tipigrof) { ?>
h5{ 
<?php if($h5tipigrof['font-color'])     { echo 'color:          '.$h5tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h5tipigrof['font-family'])    { echo 'font-family:    '.$h5tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h5tipigrof['font-size'])      { echo 'font-size:      '.$h5tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h5tipigrof['font-style'])     { echo 'font-style:     '.$h5tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h5tipigrof['font-variant'])   { echo 'font-variant:   '.$h5tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h5tipigrof['font-weight'])    { echo 'font-weight:    '.$h5tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h5tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h5tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h5tipigrof['line-height'])    { echo 'line-height:    '.$h5tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h5tipigrof['text-decoration']){ echo 'text-decoration:'.$h5tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h5tipigrof['text-transform']) { echo 'text-transform: '.$h5tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h6tipigrof = ot_get_option( 'h6_tipigrof', array() ); ?> 
<?php if($h6tipigrof) { ?>
h6{ 
<?php if($h6tipigrof['font-color'])     { echo 'color:          '.$h6tipigrof['font-color'].'!important';      }else{ echo '';} ?>;
<?php if($h6tipigrof['font-family'])    { echo 'font-family:    '.$h6tipigrof['font-family'].'!important';     }else{ echo '';} ?>;
<?php if($h6tipigrof['font-size'])      { echo 'font-size:      '.$h6tipigrof['font-size'].'!important';       }else{ echo '';} ?>;
<?php if($h6tipigrof['font-style'])     { echo 'font-style:     '.$h6tipigrof['font-style'].'!important';      }else{ echo '';} ?>;
<?php if($h6tipigrof['font-variant'])   { echo 'font-variant:   '.$h6tipigrof['font-variant'].'!important';    }else{ echo '';} ?> ;
<?php if($h6tipigrof['font-weight'])    { echo 'font-weight:    '.$h6tipigrof['font-weight'].'!important';     }else{ echo '';} ?> ;
<?php if($h6tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h6tipigrof['letter-spacing'].'!important';  }else{ echo '';} ?> ;
<?php if($h6tipigrof['line-height'])    { echo 'line-height:    '.$h6tipigrof['line-height'].'!important' ;    }else{ echo '';} ?> ;
<?php if($h6tipigrof['text-decoration']){ echo 'text-decoration:'.$h6tipigrof['text-decoration'].'!important'; }else{ echo '';} ?> ;
<?php if($h6tipigrof['text-transform']) { echo 'text-transform: '.$h6tipigrof['text-transform'].'!important' ; }else{ echo '';} ?> ;
}
<?php } ?>
	a {
	  color: <?php echo ot_get_option( 'unica_linkcolor' ); ?>;
	}
	
	.filter,
	.pagination,
	.tabs-nav {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}

	.social-nav a:hover {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.section-bg-overlay .btn-bordered,
	.btn-bordered .section-bg-dark,
	.section-bg-img-dark .btn-bordered {
	  border-color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.btn-icon {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}	
	.btn-lightbox:before {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}	
	.icon-b {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.icon-b-alt:before {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}	
	.input.input--error {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.input.input--error .input-field:before {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}

	.input.input--error .input-field:after {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.intro .fa {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.expirience .expirience-item:hover .icon-b:before {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.services .fa-3x,
	.services .fa-4x,
	.services .fa-5x {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.bars .bars-item .bars-item-progress,
	.bars .bars-item .skills-item-progress,
	.bars .skills-item .bars-item-progress,
	.bars .skills-item .skills-item-progress,
	.skills .bars-item .bars-item-progress,
	.skills .bars-item .skills-item-progress,
	.skills .skills-item .bars-item-progress,
	.skills .skills-item .skills-item-progress {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}	
	.gallery .gallery-item a:before {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}	
	.works .works-item .works-item-link:before {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.owl-unica .owl-pagination .owl-page {
	  color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.owl-unica .owl-prev,
	.owl-unica .owl-next {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}	
	.message.message-error {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.accordion .accordion-item.accordion-item-active .accordion-item-heading {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.toggle-item.toggle-item-active .toggle-item-heading {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.list-check li:before {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.mfp-wrap.unica .mfp-close:hover,
	.mfp-wrap.unica .mfp-arrow:hover {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.mfp-wrap.unica .mfp-close {
	  background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}	

	.wpcf7-submit:hover {
   		 background: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
	.vc_pagination-style-outline .vc_active .vc_pagination-trigger,
	a.vc_pagination-trigger:hover {
   		 background: <?php echo ot_get_option( 'unica_color' ); ?>!important;
	}
	.vc_pagination-color-grey.vc_pagination-style-outline .vc_pagination-trigger {
   		 border-color: <?php echo ot_get_option( 'unica_color' ); ?>!important;
	}
	.vc_column-inner .vc_tta-container .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a{
		color: <?php echo ot_get_option( 'unica_color' ); ?> ;
	}
	.mfp-wrap.unica .mfp-bottom-bar {
   		 background: <?php echo ot_get_option( 'unica_color' ); ?>;
		 opacity: 0.8;
	}
	#preloader .pulse {
	 background-color: <?php echo ot_get_option( 'unica_color' ); ?>;
	}
<?php $headerbg = rwmb_meta( 'klb_blog_header_background', 'type=image_advanced&size=full' ); ?>
<?php $headerbg1 = ot_get_option( 'blog_header' ); ?>

<?php if($headerbg) { ?>
.post-<?php the_ID(); ?> .blog button.toggle-menu, .single button.toggle-menu {
	color:#fff;
}
<?php } ?>

<?php if($headerbg1) { ?>
.blog button.toggle-menu{
	color:#fff;
}
<?php } ?>
</style>
<?php }
add_action('wp_head','unica_custom_styling');


?>