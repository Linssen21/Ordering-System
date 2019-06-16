<div class="text-center">
	<md-toolbar class="md-whiteframe-6">
		<div class="md-toolbar-tools " md-whiteframe="6" style="background-color:#E0E0E0">
			<h3>
				<h2 style="font-weight:400;margin-left:5px;color:black">Orders</h2>
			</h3>
		</div>
	</md-toolbar>
	<md-content class="md-padding">
		<md-card>
				<div layout="column" style="width:100%">
						<div class="md-padding">
							<md-title>List of Orders</md-title>
							<div style="background-color:#F9A825;height:4px;width:40px;margin-top:5px;margin-bottom:5px"></div>
						</div>
						<div layout="column">
							<md-list style="margin-top:-20px">
								<md-list-item ng-click="null">
									<div style="max-height:40px" layout="row">
										<md-icon style="margin-top:12px;margin-left:10px">
											<svg style="width:10px;height:10px" viewBox="0 0 24 24">
												<path fill="#00C853" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
											</svg>
										</md-icon>
										<h4 style="font-weight:400;margin:0px" layout-align="center center">Customer Name</h4>
										<h4 style="font-weight:400;margin:0px;margin-left:100px" layout-align="center center">Customer Address</h4>
										<h4 style="font-weight:400;margin:0px;margin-left:100px" layout-align="center center">Customer Contact No.</h4>
										<h4 style="font-weight:400;margin:0px;margin-left:100px" layout-align="center center">Customer Email</h4>
									</div>
								</md-list-item>
								<md-divider></md-divider>
							</md-list>
						</div>
					</div>
		</md-card>
	</md-content>
</div>