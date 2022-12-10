<?php
/**
 * Slider Desktop Template
 *
 * @package University_Animal_Clinic
 */
 
	$services_post_data_desktop = $args['data'];

if ( ! empty( $services_post_data_desktop ) && is_array( $services_post_data_desktop ) ) :
	?>			
		<div class="d-none d-lg-block">
			<div class="service-owl owl-carousel owl-theme">
			<?php
			foreach ( $services_post_data_desktop as $service_data_desktop ) :
				?>
						<div class="item">
							<div class="row">
						<?php
						foreach ( $service_data_desktop as $service_single_data_desktop ) :
							?>
										<div class="col-md-6">
											<div class="service-box">
									<?php
									if ( ! empty( $service_single_data_desktop->image_url ) ) :
										?>
														<div class="service-image">
															<img src="<?php echo esc_url( $service_single_data_desktop->image_url ); ?>" alt="<?php echo esc_attr( $service_single_data_desktop->image_alt_text ); ?>" />
														</div>
											<?php
												endif;
									?>
												<div class="service-info">
													<div class="service-inner">
														<div class="service-icon comman-icon">
												<?php
												switch ( $service_single_data_desktop->icon_type ) :
													case 'dental':
														?>
																		<span class="icon-dental"></span>
														<?php
														break;
													case 'heart_paw':
														?>
																		<span class="icon-heart-paw"></span>
														<?php
														break;
													case 'vaccines':
														?>
																		<span class="icon-vaccines"></span>
														<?php
														break;
													default:
														?>
																		<span class="icon-exotic-care"></span>
															<?php
														break;
															endswitch;
												?>
														</div>
														<?php
														if ( ! empty( $service_single_data_desktop->title ) ) :
															?>
																<div class="service-title"><?php echo esc_html( $service_single_data_desktop->title ); ?></div>
																<?php
															endif;
														?>
														<?php
														if ( ! empty( $service_single_data_desktop->link ) ) :
															?>
															<a class="learn-more" href="<?php echo esc_url( $service_single_data_desktop->link ); ?>" target="_self">learn more <span class="icon-arrow-right"></span></a>
															<?php
															endif;
														?>
													</div>
												</div>
											</div>
										</div>
										<?php
									endforeach;
						?>
							</div>
						</div>
						<?php
					endforeach;
			?>
			</div>
		</div>
		<?php
	endif;
?>
