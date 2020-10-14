<div class="col-md-3">
                    <div class="profile-sidebar">
                      <!-- SIDEBAR USERPIC -->
                      {{-- <div class="profile-userpic">
                        <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                      </div> --}}
                      <!-- END SIDEBAR USERPIC -->
                      <!-- SIDEBAR USER TITLE -->
                      <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                          {{auth()->user()->name}}
                        </div>
                        <div class="profile-usertitle-job">
                          {{auth()->user()->email}}
                        </div>
                      </div>
                      
                      <div class="profile-usermenu">
                        <ul class="list-group">
                          <li class="list-group-item">
                            <a href="{{ route('user.index') }}">
                            <i class="glyphicon glyphicon-home"></i>
                            My Profile </a>
                          </li>
                          <li class="list-group-item">
                            <a href="{{ route('user.payout') }}">
                            <i class="glyphicon glyphicon-user"></i>
                            Payout </a>
                          </li>
                          <li class="list-group-item">
                            <a href="{{ route('user.referral') }}">
                            <i class="glyphicon glyphicon-share"></i>
                            Referral </a>
                          </li>
                          <li class="list-group-item">
                            <a href="{{ route('user.wallet') }}">
                            <i class="glyphicon glyphicon-share"></i>
                            My Wallet </a>
                          </li>
                          <li class="list-group-item">
                            <a href="{{ route('user.transaction') }}">
                            <i class="glyphicon glyphicon-share"></i>
                            My Transactions </a>
                          </li>
                          <li class="list-group-item">
                            <a href="{{ route('withdrawal.index') }}">
                            <i class="glyphicon glyphicon-share"></i>
                            My Withdrawals </a>
                          </li>
                          
                        </ul>
                      </div>
                      <!-- END MENU -->
                    </div>
                  </div>