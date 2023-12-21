<h5>User Setting</h5>
<div class="pb-4 pt-2">
    <div class="row g-3 row-cols-1 row-cols-md-2">

        <div class="col-md-2">
            <a wire:navigate.hover href="{{ route('usercreateoredit') }}"
                class="text-decoration-none text-dark text-center">
                <div class="card shadow-sm bg-white">
                    <i class="bi bi-people" style="font-size: 2.4rem;"></i>
                    <div class="card-footer">
                        <div class="fw-b">Add User </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-md-2">
            <a wire:navigate.hover href="{{ route('userchangepassword') }}"
                class="text-decoration-none text-dark text-center">
                <div class="card shadow-sm bg-white">
                    <i class="bi bi-key" style="font-size: 2.4rem;"></i>
                    <div class="card-footer">
                        <div class="fw-b">Change Password </div>
                    </div>
                </div>
            </a>
        </div>



    </div>
</div>
