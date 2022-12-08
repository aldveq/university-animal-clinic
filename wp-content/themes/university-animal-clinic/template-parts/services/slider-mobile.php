<?php
	$services_post_data_mobile = $args['data'];

	if(!empty($services_post_data_mobile) && is_array($services_post_data_mobile)):
		?>
		<div class="d-lg-none">
			<div class="service-owl owl-carousel owl-theme">
				<?php
					foreach($services_post_data_mobile as $service_data_mobile):
						?>
						<div class="item">
							<div class="service-box">
								<?php
									if(!empty($service_data_mobile->image_url)):
									?>
									<div class="service-image">
										<img src="<?php echo esc_url($service_data_mobile->image_url); ?>" alt="<?php echo esc_attr($service_data_mobile->image_alt_text); ?>" />
									</div>
									<?php
									endif;
								?>
								<div class="service-info">
									<div class="service-inner">
										<div class="service-icon comman-icon">
											<?php
												switch ($service_data_mobile->icon_type):
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
											if(!empty($service_data_mobile->title)):
											?>
											<div class="service-title"><?php echo esc_html($service_data_mobile->title); ?></div>
											<?php
											endif;
										?>
										<?php
											if(!empty($service_data_mobile->link)):
											?>
											<a class="learn-more" href="<?php echo esc_url($service_data_mobile->link); ?>">learn more <span class="icon-arrow-right"></span></a>
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
	endif;
?>
