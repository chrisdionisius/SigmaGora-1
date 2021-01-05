@extends('layouts.master')
@section('judul','Index')
@section('content')

<main id="tt-pageContent" class="tt-offset-small">
    <div class="tt-wrapper-section">
        <div class="container">
            <div class="tt-user-header">
                <div class="tt-col-avatar">
                    <div class="tt-icon">
                        <svg class="tt-icon">
                            <use xlink:href="#icon-ava-d"></use>
                        </svg>
                    </div>
                </div>
                <div class="tt-col-title">
                    <div class="tt-title">
                        <a href="/threads">{{Auth::user()->name}}</a>
                    </div>
                    <ul class="tt-list-badge">
                        <li><a href="#"><span class="tt-color14 tt-badge">LVL : 26</span></a></li>
                    </ul>
                </div>
                <div class="tt-col-btn" id="js-settings-btn">
                    <div class="tt-list-btn">
                        <a href="#" class="tt-btn-icon">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-settings_fill"></use>
                            </svg>
                        </a>
                        <a href="#" class="btn btn-primary">Message</a>
                        <a href="#" class="btn btn-secondary">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tt-tab-wrapper">
            <div class="tt-wrapper-inner">
                <ul class="nav nav-tabs pt-tabs-default" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#tt-tab-01" role="tab"><span>Activity</span></a>
                    </li>
                    <li class="nav-item show">
                        <a class="nav-link active" data-toggle="tab" href="#tt-tab-02"
                            role="tab"><span>Threads</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-03" role="tab"><span>Replies</span></a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">

                <div class="tab-pane tt-indent-none" id="tt-tab-01" role="tabpanel">
                    <div class="tt-topic-list">
                        <div class="tt-list-header">
                            <div class="tt-col-topic">Topic</div>
                            <div class="tt-col-value-large hide-mobile">Category</div>
                            <div class="tt-col-value-large hide-mobile">Status</div>
                            <div class="tt-col-value-large hide-mobile">Activity</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-n"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        Does Envato act against the authors of Envato markets?
                                    </a></h6>
                                <div class="tt-col-message">
                                    <a href="#">Dylan replied:</a> It’s time to channel your inner Magnum P.I., Ron
                                    Swanson or Hercule Poroit! It’s the time that all guys (or gals) love and all
                                    our partners hate It’s Movember!
                                </div>
                                <div class="row align-items-center no-gutters hide-desktope">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color05 tt-badge">music</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-reply"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">5 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large hide-mobile"><span
                                    class="tt-color05 tt-badge">music</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-reply"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">5 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-h"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-locked"></use>
                                        </svg>
                                        We Want to Hear From You! What Would You Like?
                                    </a></h6>
                                <div class="row align-items-center no-gutters hide-desktope">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color06 tt-badge">movies</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-like"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">5 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large hide-mobile"><span
                                    class="tt-color06 tt-badge">movies</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-like"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">5 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-j"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        Seeking partner backend developer
                                    </a></h6>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color13 tt-badge">nature</span></a></li>
                                            <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                            <li><a href="#"><span class="tt-badge">elements</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-share"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">4 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large hide-mobile"><span
                                    class="tt-color13 tt-badge">nature</span></div>
                            <div class="tt-col-category tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-share"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">4 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-t"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        Cannot customize my intro
                                    </a></h6>
                                <div class="tt-col-message">
                                    <a href="#">Dylan replied:</a> I am noticed it will take little more time to
                                    review new authors submissions. All the Best
                                </div>
                                <div class="row align-items-center no-gutters hide-desktope">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color04 tt-badge">pets</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-reply"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">4 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large hide-mobile"><span
                                    class="tt-color04 tt-badge">pets</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-reply"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">4 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-d"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        Web Hosting Packages for ThemeForest WordPress
                                    </a></h6>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color03 tt-badge">exchange</span></a></li>
                                            <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                            <li><a href="#"><span class="tt-badge">elements</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">4 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large"><span
                                    class="tt-color03 tt-badge">exchange</span></div>
                            <div class="tt-col-value-large hide-mobile"></div>
                            <div class="tt-col-value-large hide-mobile">4 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-k"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-verified"></use>
                                        </svg>
                                        Microsoft Word and Power Point
                                    </a></h6>
                                <div class="row align-items-center no-gutters hide-desktope">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color08 tt-badge">youtube</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">3 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large"><span
                                    class="tt-color08 tt-badge">youtube</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-favorite"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">3 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-v"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        First website template got rejected.
                                    </a></h6>
                                <div class="row align-items-center no-gutters hide-desktope">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><span class="tt-color09 tt-badge">social</span>
                                            </li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-like"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">3 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large"><span
                                    class="tt-color09 tt-badge">social</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-like"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">3 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-k"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-pinned"></use>
                                        </svg>
                                        Proform or looking for contacting billing department
                                    </a></h6>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color10 tt-badge">science</span></a></li>
                                            <li><a href="#"><span class="tt-badge">contests</span></a></li>
                                            <li><a href="#"><span class="tt-badge">authors</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-like"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">2 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large"><span
                                    class="tt-color10 tt-badge">science</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-like"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">2 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-n"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        Does Envato act against the authors of Envato markets?
                                    </a></h6>
                                <div class="tt-col-message">
                                    <a href="#">Dylan replied:</a> It’s time to channel your inner Magnum P.I., Ron
                                    Swanson or Hercule Poroit! It’s the time that all guys (or gals) love and all
                                    our partners hate It’s Movember!
                                </div>
                                <div class="row align-items-center no-gutters hide-desktope">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color05 tt-badge">music</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-reply"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">5 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large"><span
                                    class="tt-color05 tt-badge">music</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-reply"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">5 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-h"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-locked"></use>
                                        </svg>
                                        We Want to Hear From You! What Would You Like?
                                    </a></h6>
                                <div class="row align-items-center no-gutters hide-desktope">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color06 tt-badge">movies</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-reply"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">5 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large"><span
                                    class="tt-color06 tt-badge">movies</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-reply"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">5 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-j"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        Seeking partner backend developer
                                    </a></h6>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color13 tt-badge">nature</span></a></li>
                                            <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                            <li><a href="#"><span class="tt-badge">elements</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-share"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">4 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large"><span
                                    class="tt-color13 tt-badge">nature</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-share"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">4 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-t"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        Cannot customize my intro
                                    </a></h6>
                                <div class="tt-col-message">
                                    <a href="#">Dylan replied:</a> I am noticed it will take little more time to
                                    review new authors submissions. All the Best
                                </div>
                                <div class="row align-items-center no-gutters hide-desktope">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color04 tt-badge">pets</span></a></li>
                                        </ul>
                                        <a href="#" class="tt-btn-icon show-mobile">
                                            <i class="tt-icon"><svg>
                                                    <use xlink:href="#icon-reply"></use>
                                                </svg></i>
                                        </a>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">4 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large"><span
                                    class="tt-color04 tt-badge">pets</span></div>
                            <div class="tt-col-value-large hide-mobile">
                                <a href="#" class="tt-btn-icon">
                                    <i class="tt-icon"><svg>
                                            <use xlink:href="#icon-reply"></use>
                                        </svg></i>
                                </a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">4 Jan,19</div>
                        </div>
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-d"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title"><a href="#">
                                        Web Hosting Packages for ThemeForest WordPress
                                    </a></h6>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color03 tt-badge">exchange</span></a></li>
                                            <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                            <li><a href="#"><span class="tt-badge">elements</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">4 Jan,19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category tt-col-value-large"><span
                                    class="tt-color03 tt-badge">exchange</span></div>
                            <div class="tt-col-value-large hide-mobile"></div>
                            <div class="tt-col-value-large hide-mobile">4 Jan,19</div>
                        </div>
                        <div class="tt-row-btn">
                            <button type="button" class="btn-icon js-topiclist-showmore">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-load_lore_icon"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="tab-pane tt-indent-none show active" id="tt-tab-02" role="tabpanel">
                    <div class="tt-topic-list">
                        <div class="tt-list-header">
                            <div class="tt-col-topic">Topik</div>
                            <div class="tt-col-category">kategori</div>
                            <div class="tt-col-value hide-mobile">Like</div>
                            <div class="tt-col-value hide-mobile">Balasan</div>
                            <div class="tt-col-value hide-mobile">Pengunjung</div>
                            <div class="tt-col-value">Diposting</div>
                            <div class="tt-col-value">Aksi</div>
                        </div>
                        @foreach($threads as $thread)
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-n"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title">
                                    <a href="/threads/{{$thread-> id}}">
                                        <h3>{{$thread->title}}</h3>
                                    </a>
                                </h6>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-11">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color05 tt-badge">{{$thread->category->category_name}}</span></a>
                                            </li>
                                            @foreach($thread->tags as $tag)
                                            <li><a href="#"><span class="tt-badge">{{$tag->name}}</span></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-1 ml-auto show-mobile">
                                        <div class="tt-value">{{$thread-> elapsed}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-category">
                                <span class="tt-color05 tt-badge">{{$thread->category->category_name}}</span>
                            </div>
                            <div class="tt-col-value hide-mobile">{{$thread->likes->count()}}</div>
                            <div class="tt-col-value tt-color-select hide-mobile">{{$thread->comments->count()}}</div>
                            <div class="tt-col-value hide-mobile">{{views($thread)->count()}}</div>
                            <div class="tt-col-value hide-mobile">{{$thread-> elapsed}}</div>
                            <div class="tt-col-value hide-mobile">
                                <form action="/threads/{{$thread->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="badge badge-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                        <div class="tt-row-btn">
                            <ul class="pagination justify-content-center mb-4">
                                {{$threads->links()}}
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="tab-pane tt-indent-none" id="tt-tab-03" role="tabpanel">
                    <div class="tt-topic-list">
                        <div class="tt-list-header">
                            <div class="tt-col-topic">Topic</div>
                            <div class="tt-col-category">Category</div>
                            <div class="tt-col-value">Activity</div>
                        </div>

                        @foreach(Auth::user()->comments as $comment)
                        <div class="tt-item">
                            <div class="tt-col-avatar">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-ava-d"></use>
                                </svg>
                            </div>
                            <div class="tt-col-description">
                                <h6 class="tt-title">
                                    <a href="/thread/{{$comment->commentable->id}}">{{$comment->commentable->title}}</a>
                                </h6>
                                <div class="row align-items-center no-gutters hide-desktope">
                                    <div class="col-9">
                                        <ul class="tt-list-badge">
                                            <li class="show-mobile"><a href="#"><span
                                                        class="tt-color06 tt-badge">movies</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-3 ml-auto show-mobile">
                                        <div class="tt-value">5 Jan,19</div>
                                    </div>
                                </div>
                                <div class="tt-content">
                                    {{$comment->content}}
                                </div>
                            </div>
                            <div class="tt-col-category"><a href="#"><span
                                        class="tt-color06 tt-badge">{{$comment->commentable->category->category_name}}</span></a>
                            </div>
                            <div class="tt-col-value-large hide-mobile">{{$comment->elapsed}}</div>
                        </div>
                        @endforeach

                        <div class="tt-row-btn">
                            <button type="button" class="btn-icon js-topiclist-showmore">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-load_lore_icon"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tt-tab-06" role="tabpanel">
                    <div class="tt-wrapper-inner">
                        <div class="tt-categories-list">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color01 tt-badge">politics</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="tt-btn-icon">
                                                <i class="tt-icon"><svg>
                                                        <use xlink:href="#icon-favorite"></use>
                                                    </svg></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color02 tt-badge">video</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 368</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">movies</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">new movies</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">marvel movies</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">netflix</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">prime</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color03 tt-badge">exchange</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 381</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color04 tt-badge">pets</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 98</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color05 tt-badge">music</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 28</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color06 tt-badge">movies</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 74</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color15 tt-badge">nature</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color07 tt-badge">video
                                                            games</span></a></li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color08 tt-badge">youtube</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color09 tt-badge">social</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color10 tt-badge">science</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span
                                                            class="tt-color11 tt-badge">entertainment</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color04 tt-badge">pets</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color05 tt-badge">music</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="#"><span class="tt-color06 tt-badge">movies</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="tt-title"><a href="#">Threads - 1,245</a></h6>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Lets discuss about whats happening around the world politics.
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <h6 class="tt-title">Similar TAGS</h6>
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-badge">world politics</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">human rights</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                                    <li><a href="#"><span class="tt-badge">climate change</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tt-innerwrapper">
                                                <a href="#" class="tt-btn-icon">
                                                    <i class="tt-icon"><svg>
                                                            <use xlink:href="#icon-favorite"></use>
                                                        </svg></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="tt-row-btn">
                                        <button type="button" class="btn-icon js-topiclist-showmore">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-load_lore_icon"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection