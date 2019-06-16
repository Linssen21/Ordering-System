<div class="text-center">
	<md-toolbar class="md-whiteframe-6">
		<div class="md-toolbar-tools " md-whiteframe="6" style="background-color:#E0E0E0">
			<h3>
				<h2 style="font-weight:400;margin-left:5px;color:black">Branches</h2>
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
								<md-icon style="margin-top:5px;margin-left:10px;margin-right:20px">
									<svg style="width:24px;height:24px" viewBox="0 0 24 24">
											<path fill="#00C853" d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M3.05,13H1V11H3.05C3.5,6.83 6.83,3.5 11,3.05V1H13V3.05C17.17,3.5 20.5,6.83 20.95,11H23V13H20.95C20.5,17.17 17.17,20.5 13,20.95V23H11V20.95C6.83,20.5 3.5,17.17 3.05,13M12,5A7,7 0 0,0 5,12A7,7 0 0,0 12,19A7,7 0 0,0 19,12A7,7 0 0,0 12,5Z" />
										</svg>
								</md-icon>
								<h4 style="font-weight:400;margin:0px" layout-align="center center">Branch ID</h4>
								<h4 style="font-weight:400;margin:0px;margin-left:100px" layout-align="center center">Branch Address</h4>
								<h4 style="font-weight:400;margin:0px;margin-left:100px" layout-align="center center">Branch Contact No.</h4>
								<h4 style="font-weight:400;margin:0px;margin-left:100px" layout-align="center center">Branch Manager</h4>
							</div>
						</md-list-item>
						<md-divider></md-divider>
					</md-list>
				</div>
			</div>
		</md-card>
	</md-content>
</div>