			<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					<h2><a href="<?php echo $this->url_for('index') ?>"><?php echo ucfirst($_entities) ?></a></h2>
					<ul>
						<li><a href="<?php echo $this->url_for('new') ?>">Add</a></li>
					</ul>
					<?php
					$searchForm->open();
					echo $searchForm->search->def(array(
						'attrs'	=>	array(
							'class'	=>	'text',
							'placeholder'	=>	'Search',
						),
					));
					$searchForm->close();
					?>
				</div>	
				
				<div class="block_content">
				<!-- 	<div class="block small left" style="width:100%">
						<div class="block_head">
							<div class="bheadl"></div>
							<div class="bheadr"></div>
							<h2>Liste</h2>	
						</div>	
						<div class="block_content"> -->
						
							<?php \Asgard\Core\App::get('flash')->showAll() ?>
						
							<?php if(sizeof($mailings) == 0): ?>
							<div style="text-align:center; font-weight:bold"><?php echo __('Aucun élément') ?></div>
							<?php else: ?>
							<form action="" method="post">
								<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
								
									<thead>
										<tr>
											<th width="10"><input type="checkbox" class="check_all" /></th>
											<th>Created</th>
											<th>Title</th>
											<td>&nbsp;</td>
										</tr>
									</thead>
									
									<tbody>
										<?php
										foreach($mailings as $mailing) { ?>								
											<tr>
												<td><input type="checkbox" name="id[]" value="<?php echo $mailing->id ?>" /></td>
												<td><?php echo $mailing->created_at->format('d/m/Y H:i:s') ?></td>
												<td><a href="<?php echo $this->url_for('edit', array('id'=>$mailing->id)) ?>"><?php echo $mailing ?></a></td>
												<td class="actions">
													<?php \Asgard\Core\App::get('hook')->trigger_print('asgard_mailing_actions', $mailing) ?>
													<a class="delete" href="<?php echo $this->url_for('delete', array('id'=>$mailing->id)) ?>">Delete</a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
									
								</table>
								<div class="tableactions">
									<select name="action">
										<option>Actions</option>
										<option value="delete">Delete</option>
									</select>
									<input type="submit" class="submit tiny" value="Apply" />
								</div>		
								
								<?php
								if(isset($paginator))
								if($paginator->getPages()>1) {
								?>
								<div class="pagination right">
									<?php $paginator->show() ?>
								</div>
								<?php
								}
								?>
								
							</form>
							<?php endif ?>
						</div>		<!-- .block_content ends -->
						<!-- <div class="bendl"></div>
						<div class="bendr"></div>
					</div> -->
					<!--<div class="block small right" style="width:19%">
						<div class="block_head">
							<div class="bheadl"></div>
							<div class="bheadr"></div>
							
							<h2>Filtres</h2>
						</div>	
						<div class="block_content">
							<?php
							?>
							
						</div>		
						
						<div class="bendl"></div>
						<div class="bendr"></div>
					</div>-->
				<div class="bendl"></div>
				<div class="bendr"></div>
			</div>		