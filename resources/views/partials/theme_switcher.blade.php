<div class="fixed-action-btn" style="left: 45px;top: 150px;height: 68px;width: 68px;padding: 0;margin: 0;">
    <a class="btn-floating btn-large waves-effect waves-light primary-color-dark" data-toggle="modal" data-target="#theme_switcher">
        <i class="fa fa-tint"></i>
    </a>
</div>
<div class="modal fade" id="theme_switcher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Select color scheme</h4>
            </div>
            <!--Body-->
            <div class="modal-body text-xs-center">
               <button data-selected-theme="danger-color" class="theme-switcher-btn btn danger-color">&nbsp;</button>
               <button data-selected-theme="danger-color-dark" class="theme-switcher-btn btn danger-color-dark">&nbsp;</button>
               <button data-selected-theme="warning-color" class="theme-switcher-btn btn warning-color">&nbsp;</button>
               <button data-selected-theme="warning-color-dark" class="theme-switcher-btn btn warning-color-dark">&nbsp;</button>
               <button data-selected-theme="success-color" class="theme-switcher-btn btn success-color">&nbsp;</button>
               <button data-selected-theme="success-color-dark" class="theme-switcher-btn btn success-color-dark">&nbsp;</button>
               <button data-selected-theme="info-color" class="theme-switcher-btn btn info-color">&nbsp;</button>
               <button data-selected-theme="info-color-dark" class="theme-switcher-btn btn info-color-dark">&nbsp;</button>
               <button data-selected-theme="default-color" class="theme-switcher-btn btn default-color">&nbsp;</button>
               <button data-selected-theme="default-color-dark" class="theme-switcher-btn btn default-color-dark">&nbsp;</button>
               <button data-selected-theme="primary-color" class="theme-switcher-btn btn primary-color">&nbsp;</button>
               <button data-selected-theme="primary-color-dark" class="theme-switcher-btn btn primary-color-dark">&nbsp;</button>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn primary-color-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>