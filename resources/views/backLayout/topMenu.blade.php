
          
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ URL::to('/') }}/images/{{Sentinel::getUser()->avatar }}"  alt="">{{Sentinel::getUser()->first_name.' ' .Sentinel::getUser()->last_name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{url('/perfil')}}"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                     {!! Form::open(['url' => url('logout'),'class'=>'form-inline']) !!}
                           {!! csrf_field() !!}
                          <li><button class="btn btn-primary btn-lg btn-block register-button" type="submit" >Logout</button> </li>
                       {!! Form::close() !!}
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">3</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <div id="notificaciones"></div>
                  
                   {{--  @foreach($notificaciones as $item)
                    <li>
                      <a>
                        <span class="image"><img src="{{ URL::asset('/images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>{{ $item->pern }} {{ $item->pera }}</span>
                          <span class="time">{{ $item->created_at }}</span>
                        </span>
                        <span class="message">
                          {{ $item->descripcion }}
                        </span>
                      </a>
                    </li>
                  @endforeach  --}}
                  {!! Form::open(array('url' => ['notificaciones/noti',],'id'=>'form-noti')) !!}
                  {!! Form::close() !!}
                   <li>
                      <div class="text-center">
                       <a href="{{route('notificaciones.create')}}">
                      <strong>New Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                      </a>
                      </div>
                    </li>
                    <li>
                      <div class="text-center">
                      <a href="{{route('notificaciones.index')}}">
                      <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                      </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>