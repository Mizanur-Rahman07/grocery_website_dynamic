<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">

            <!-- ============================= Home Work ================================ -->

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#dashboard" type="button"><i
                        class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Product">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#product" type="button"><i
                        class="bi bi-grid-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Category">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#category" type="button"><i
                        class="bi bi-briefcase-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Product-Type">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#productType" type="button"><i
                        class="bi bi-briefcase-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#settings" type="button"><i
                        class="bi bi-gear-fill"></i></button>
            </li>


        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('adminAsset')}}/assets/images/brand-logo-2.png" width="140" alt="" />
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="dashboard">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('dashboard')}}" class="list-group-item"><i
                            class="bi bi-cart-plus"></i>Dashboard</a>
                    <a href="#" class="list-group-item"><i class="bi bi-cart-plus"></i>Add
                        Grocery Feature</a>
                    <a href="#" class="list-group-item"><i class="bi bi-cart-plus"></i>Manage
                        Grocery Feature</a>

                </div>
            </div>
            <div class="tab-pane fade" id="product">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Product</h5>
                        </div>
                        <small class="mb-0">Some Product content</small>
                    </div>
                    <a href="{{ route('add.product')}}" class="list-group-item"><i class="bi bi-envelope"></i>Add
                        Product</a>
                    <a href="{{ route('manage.product')}}" class="list-group-item"><i class="bi bi-envelope"></i>Manage
                        Product</a>
                    <a href="{{ route('add.productOffer')}}" class="list-group-item"><i class="bi bi-envelope"></i>Add
                        Offer Product</a>
                    <a href="{{ route('manage.product.offer')}}" class="list-group-item"><i
                            class="bi bi-envelope"></i>Manage
                        Offer Product</a>

                </div>
            </div>
            <div class="tab-pane fade" id="category">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Category</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('add-category')}}" class="list-group-item"><i class="bi bi-box"></i>
                        Add Category</a>
                    <a href="{{ route('manage-category')}}" class="list-group-item"><i
                            class="bi bi-bar-chart"></i>Manage
                        Category</a>
                </div>
            </div>
            <div class="tab-pane fade" id="productType">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Product Type</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('add.productType')}}" class="list-group-item"><i class="bi bi-box"></i>
                        Add Product Type</a>
                    <a href="{{ route('manage.productType')}}" class="list-group-item"><i
                            class="bi bi-bar-chart"></i>Manage
                        Product Type</a>
                </div>
            </div>

            <div class="tab-pane fade" id="settings">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Settings</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('add.product.label')}}" class="list-group-item"><i class="bi bi-box"></i>
                        Add Product Label</a>
                    <a href="#" class="list-group-item"><i class="bi bi-bar-chart"></i>Settings 2</a>
                </div>
            </div>

        </div>
    </div>
</aside>