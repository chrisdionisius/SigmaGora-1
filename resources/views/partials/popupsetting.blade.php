<div id="js-popup-settings" class="tt-popup-settings">
        <div class="tt-btn-col-close">
            <a href="#">
                <span class="tt-icon-title">
                    <svg>
                        <use xlink:href="#icon-settings_fill"></use>
                    </svg>
                </span> 
                <span class="tt-icon-text">
                    Settings
                </span>
                <span class="tt-icon-close">
                    <svg>
                        <use xlink:href="#icon-cancel"></use>
                    </svg>
                </span>
            </a>
        </div>
        @guest
        @else
        <form class="form-default" action="/update_profile" method="post">
            @csrf
            <div class="tt-form-upload">
                <div class="row no-gutter">
                    <div class="col-auto">
                        <div class="tt-avatar">
                            <svg>
                                
                                <use xlink:href="#icon-ava-{{strtolower(substr(Auth::user()->name,0,1))}}"></use>
                            </svg>
                        </div>
                    </div>
                    <!-- <div class="col-auto ml-auto">
                        <a href="#" class="btn btn-primary">Upload Picture</a>
                    </div> -->
                </div>
            </div>
            <div class="form-group">
                <label for="settingsUserName">Username</label>
                <input type="text" name="name" class="form-control" id="settingsUserName" placeholder="{{Auth::user()->name}}" value="{{Auth::user()->name}}">
            </div>
            <div class="form-group">
                <label for="settingsUserEmail">Email</label>
                <input type="text" name="email" class="form-control" id="settingsUserEmail" placeholder="{{Auth::user()->email}}" value="{{Auth::user()->email}}">
            </div>
            <div class="form-group">
                <label for="settingsUserPassword">Password</label>
                <input type="password" name="password" class="form-control" id="settingsUserPassword">
            </div>
            <!-- <div class="form-group">
                <label for="settingsUserLocation">Location</label>
                <input type="text" name="name" class="form-control" id="settingsUserLocation" placeholder="Slovakia">
            </div>
            <div class="form-group">
                <label for="settingsUserWebsite">Website</label>
                <input type="text" name="name" class="form-control" id="settingsUserWebsite" placeholder="Sample.com">
            </div>
            <div class="form-group">
                <label for="settingsUserAbout">About</label>
                <textarea name="" placeholder="Few words about you" class="form-control"
                    id="settingsUserAbout"></textarea>
            </div> -->
            <!-- <div class="form-group">
                <label for="settingsUserAbout">Notify me via Email</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="settingsCheckBox01" name="checkbox">
                    <label for="settingsCheckBox01">
                        <span class="check"></span>
                        <span class="box"></span>
                        <span class="tt-text">When someone replies to my thread</span>
                    </label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="settingsCheckBox02" name="checkbox">
                    <label for="settingsCheckBox02">
                        <span class="check"></span>
                        <span class="box"></span>
                        <span class="tt-text">When someone likes my thread or reply</span>
                    </label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="settingsCheckBox03" name="checkbox">
                    <label for="settingsCheckBox03">
                        <span class="check"></span>
                        <span class="box"></span>
                        <span class="tt-text">When someone mentions me</span>
                    </label>
                </div>
            </div> -->
            <div class="form-group">
                <!-- <a href="#" class="btn btn-secondary">Save</a> -->
                <button type="submit" class="btn btn-secondary">Save</button>
            </div>
        </form>
        @endguest
    </div>