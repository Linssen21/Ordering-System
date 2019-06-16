<div class="text-center">
	<md-toolbar class="md-whiteframe-6">
		<div class="md-toolbar-tools " md-whiteframe="6" style="background-color:#E0E0E0">
			<h3>
				<h2 style="font-weight:400;margin-left:5px;color:black">Login</h2>
			</h3>
		</div>
	</md-toolbar>
<!-- Main Content Section -->
    <md-content class="md-padding">
        <md-card  class="header1-cards md-whiteframe-10dp" layout-align-xs="center center" layout-align-md="center center" layout-align-sm="center center"
        layout-align-lg="center center" style="height:500px;padding:50px;">
        <md-button ng-href="#login" style="margin-top:-40px;position: relative;align-self:flex-start;left:-40px" class="md-icon-button md-accent" aria-label="Favorite">
            <md-icon><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="#000000" d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" />
            </svg></md-icon>
          </md-button>
        <h2 class="md-display-1" layout-align-xs="center center" layout-align-sm="center center" layout-align-md="center center"
            layout-align-lg="center center" style="margin-top:-40px">Admin Registration</h2>
        <h2 class="md-title" layout-align-xs="center center" layout-align-sm="center center" layout-align-md="center center" layout-align-lg="center center"
            style="text-align:center;margin-top:-20px;width:50%;">Kindly fill up the necessary admin information.
        </h2>
        <div style="width:400px">
            <md-content style="width:100%" class="md-no-momentum" layout="column" layout-xs="column" layout-align-md="center center"
                layout-align-lg="center center" layout-align="center center" layout-align-xs="center center" layout-align-sm="center center">
                <div layout="row">
                    <md-icon>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#FF6F00" d="M12.63,2C18.16,2 22.64,6.5 22.64,12C22.64,17.5 18.16,22 12.63,22C9.12,22 6.05,20.18 4.26,17.43L5.84,16.18C7.25,18.47 9.76,20 12.64,20A8,8 0 0,0 20.64,12A8,8 0 0,0 12.64,4C8.56,4 5.2,7.06 4.71,11H7.47L3.73,14.73L0,11H2.69C3.19,5.95 7.45,2 12.63,2M15.59,10.24C16.09,10.25 16.5,10.65 16.5,11.16V15.77C16.5,16.27 16.09,16.69 15.58,16.69H10.05C9.54,16.69 9.13,16.27 9.13,15.77V11.16C9.13,10.65 9.54,10.25 10.04,10.24V9.23C10.04,7.7 11.29,6.46 12.81,6.46C14.34,6.46 15.59,7.7 15.59,9.23V10.24M12.81,7.86C12.06,7.86 11.44,8.47 11.44,9.23V10.24H14.19V9.23C14.19,8.47 13.57,7.86 12.81,7.86Z"
                            />
                        </svg>
                    </md-icon>
                    <md-input-container class="md-block" style="margin-left:5px">
                        <!-- Use floating placeholder instead of label -->
                        <input required ng-model="admin.name" type="name" placeholder="Full Name (required)" ng-required="true">
                    </md-input-container>
                </div>
                <div layout="row">
                    <md-icon>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#FF6F00" d="M12.63,2C18.16,2 22.64,6.5 22.64,12C22.64,17.5 18.16,22 12.63,22C9.12,22 6.05,20.18 4.26,17.43L5.84,16.18C7.25,18.47 9.76,20 12.64,20A8,8 0 0,0 20.64,12A8,8 0 0,0 12.64,4C8.56,4 5.2,7.06 4.71,11H7.47L3.73,14.73L0,11H2.69C3.19,5.95 7.45,2 12.63,2M15.59,10.24C16.09,10.25 16.5,10.65 16.5,11.16V15.77C16.5,16.27 16.09,16.69 15.58,16.69H10.05C9.54,16.69 9.13,16.27 9.13,15.77V11.16C9.13,10.65 9.54,10.25 10.04,10.24V9.23C10.04,7.7 11.29,6.46 12.81,6.46C14.34,6.46 15.59,7.7 15.59,9.23V10.24M12.81,7.86C12.06,7.86 11.44,8.47 11.44,9.23V10.24H14.19V9.23C14.19,8.47 13.57,7.86 12.81,7.86Z"
                            />
                        </svg>
                    </md-icon>
                    <md-input-container class="md-block" style="margin-left:5px">
                        <!-- Use floating placeholder instead of label -->
                        <input required ng-model="admin.password" type="password" placeholder="Password (required)" ng-required="true">
                    </md-input-container>
                </div>
                <div layout="row">
                    <md-icon>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#FF6F00" d="M12.63,2C18.16,2 22.64,6.5 22.64,12C22.64,17.5 18.16,22 12.63,22C9.12,22 6.05,20.18 4.26,17.43L5.84,16.18C7.25,18.47 9.76,20 12.64,20A8,8 0 0,0 20.64,12A8,8 0 0,0 12.64,4C8.56,4 5.2,7.06 4.71,11H7.47L3.73,14.73L0,11H2.69C3.19,5.95 7.45,2 12.63,2M15.59,10.24C16.09,10.25 16.5,10.65 16.5,11.16V15.77C16.5,16.27 16.09,16.69 15.58,16.69H10.05C9.54,16.69 9.13,16.27 9.13,15.77V11.16C9.13,10.65 9.54,10.25 10.04,10.24V9.23C10.04,7.7 11.29,6.46 12.81,6.46C14.34,6.46 15.59,7.7 15.59,9.23V10.24M12.81,7.86C12.06,7.86 11.44,8.47 11.44,9.23V10.24H14.19V9.23C14.19,8.47 13.57,7.86 12.81,7.86Z"
                            />
                        </svg>
                    </md-icon>
                    <md-input-container class="md-block" style="margin-left:5px">
                        <!-- Use floating placeholder instead of label -->
                        <input required ng-model="admin.branch" type="text" placeholder="Branch (required)" ng-required="true">
                    </md-input-container>
                </div>
                <div layout="row">
                    <md-icon>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#FF6F00" d="M12.63,2C18.16,2 22.64,6.5 22.64,12C22.64,17.5 18.16,22 12.63,22C9.12,22 6.05,20.18 4.26,17.43L5.84,16.18C7.25,18.47 9.76,20 12.64,20A8,8 0 0,0 20.64,12A8,8 0 0,0 12.64,4C8.56,4 5.2,7.06 4.71,11H7.47L3.73,14.73L0,11H2.69C3.19,5.95 7.45,2 12.63,2M15.59,10.24C16.09,10.25 16.5,10.65 16.5,11.16V15.77C16.5,16.27 16.09,16.69 15.58,16.69H10.05C9.54,16.69 9.13,16.27 9.13,15.77V11.16C9.13,10.65 9.54,10.25 10.04,10.24V9.23C10.04,7.7 11.29,6.46 12.81,6.46C14.34,6.46 15.59,7.7 15.59,9.23V10.24M12.81,7.86C12.06,7.86 11.44,8.47 11.44,9.23V10.24H14.19V9.23C14.19,8.47 13.57,7.86 12.81,7.86Z"
                            />
                        </svg>
                    </md-icon>
                    <md-input-container class="md-block" style="margin-left:5px">
                        <!-- Use floating placeholder instead of label -->
                        <input required ng-model="admin.cashiermanager" type="text" placeholder="Cashier/Manager ID (required)" ng-required="true">
                    </md-input-container>
                </div>
            </md-content>
        </div>
        <div style="margin-top:10px" layout-align="column">
            <md-button class="md-raised" id="card-button" style="background-color:#F9A825; color:white" ng-href="#register">Register</md-button>
            
        </div>
    </md-card>
    </div>