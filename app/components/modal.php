    <div class="modal fade" id="updateAccountModal" tabindex="-1" aria-labelledby="updateAccountModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body undefined text-center mb-10">
                    <img src="assets/img/caution.png" width="150" alt="">
                    <p>Please contact the admin <br>via support@rsimulator.ca to update biodata.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- View log modal start-->
    <div class="modal fade" id="viewLogModal" tabindex="-1" aria-labelledby="viewLogModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header justify-content-start">
                    <div class="icon icon-shape rounded-3 bg-primary-subtle text-primary text-lg me-4"><i class="bi bi-info-circle-fill"></i></div>
                    <div>
                        <h5 class="mb-1">Log Managament Details</h5>
                    </div>
                </div>
                <div class="modal-body" id="log_info">
                    <?php @include("../view/view-log.php");?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View log modal end-->



    <div class="modal fade" id="depositLiquidityModal" tabindex="-1" aria-labelledby="depositLiquidityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="depositLiquidityModalLabel">Deposit liquidity</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body undefined">
                    <form class="vstack gap-6">
                        <div class="vstack gap-1">
                            <div class="bg-body-secondary rounded-3 p-4">
                                <div class="d-flex justify-content-between text-xs text-muted">
                                    <span class="fw-semibold">From</span> 
                                    <span>Balance: 10,000 ADA</span>
                                </div>
                                <div class="d-flex justify-content-between gap-2 mt-4">
                                    <input type="tel" class="form-control form-control-flush text-xl fw-bold flex-fill" placeholder="0.00"> 
                                    <button class="btn btn-neutral shadow-none rounded-pill flex-none d-flex align-items-center gap-2 py-2 ps-2 pe-4">
                                        <img src="assets/img/crypto/color/ada.svg" class="w-rem-6 h-rem-6" alt="..."> 
                                        <span class="text-xs fw-semibold text-heading ms-1">ADA</span>
                                    </button>
                                </div>
                            </div>
                            <div class="position-relative text-center my-n4 overlap-10">
                                <div class="icon icon-sm icon-shape bg-body shadow-soft-3 rounded-circle text-sm text-body-tertiary">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                            </div>
                            <div class="bg-body-secondary rounded-3 p-4">
                                <div class="d-flex justify-content-between text-xs text-muted">
                                    <span class="fw-semibold">To</span> 
                                    <span>Balance: 0 SUN</span>
                                </div>
                                <div class="d-flex justify-content-between gap-2 mt-4">
                                    <input type="tel" class="form-control form-control-flush text-xl fw-bold flex-fill" placeholder="0.00"> 
                                    <button class="btn btn-neutral shadow-none rounded-pill flex-none d-flex align-items-center gap-2 py-2 ps-2 pe-4">
                                        <img src="assets/img/pools/pool-1.png" class="w-rem-6 h-rem-6 rounded-circle" alt="..."> 
                                        <span class="text-xs fw-semibold text-heading ms-1">SUN</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="form-label">Slippage tolerance</label>
                            <div class="d-flex flex-wrap gap-1 gap-sm-2">
                                <div class="w-sm-56 input-group input-group-sm input-group-inline">
                                    <input type="search" class="form-control" placeholder="1"> 
                                    <span class="input-group-text">%</span>
                                </div>
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="options" id="option1" checked="checked"> 
                                    <label class="btn btn-sm btn-neutral w-100" for="option1">0.5%</label>
                                </div>
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="options" id="option2" checked="checked"> 
                                    <label class="btn btn-sm btn-neutral w-100" for="option2">1%</label>
                                </div>
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="options" id="option3" checked="checked"> 
                                    <label class="btn btn-sm btn-neutral w-100" for="option3">3%</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Provide liquidity</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="connectWalletModal" tabindex="-1" aria-labelledby="connectWalletModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="connectWalletModalLabel">Connect your wallet</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body undefined">
                    <div class="list-group list-group-flush gap-2">
                        <div class="list-group-item border rounded d-flex gap-3 p-4 bg-body-secondary-hover">
                            <div class="icon flex-none">
                                <img src="assets/img/wallets/metamask.png" class="w-rem-8 h-rem-8" alt="...">
                            </div>
                            <div class="d-flex align-items-center flex-fill">
                                <div>
                                    <a href="#" class="stretched-link text-heading text-sm fw-bold">MetaMask</a>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge badge-md text-bg-primary">Popular</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item border rounded d-flex gap-3 p-4 bg-body-secondary-hover">
                            <div class="icon flex-none">
                                <img src="assets/img/wallets/coinbase.webp" class="w-rem-8 h-rem-8" alt="...">
                            </div>
                            <div class="d-flex align-items-center flex-fill">
                                <div>
                                    <a href="#" class="stretched-link text-heading text-sm fw-bold">Coinbase Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item border rounded d-flex gap-3 p-4 bg-body-secondary-hover">
                            <div class="icon flex-none">
                                <img src="assets/img/wallets/walletconnect.png" class="w-rem-8 h-rem-8" alt="...">
                            </div>
                            <div class="d-flex align-items-center flex-fill">
                                <div>
                                    <a href="#" class="stretched-link text-heading text-sm fw-bold">WalletConnect</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item border rounded d-flex gap-3 p-4 bg-body-secondary-hover">
                            <div class="icon flex-none">
                                <img src="assets/img/wallets/phantom.png" class="w-rem-8 h-rem-8" alt="...">
                            </div>
                            <div class="d-flex align-items-center flex-fill">
                                <div>
                                    <a href="#" class="stretched-link text-heading text-sm fw-bold">Phantom</a>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge badge-md text-bg-light">Solana</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item border rounded d-flex gap-3 p-4 bg-body-secondary-hover">
                            <div class="icon flex-none">
                                <img src="assets/img/wallets/core.png" class="w-rem-8 h-rem-8" alt="...">
                            </div>
                            <div class="d-flex align-items-center flex-fill">
                                <div>
                                    <a href="#" class="stretched-link text-heading text-sm fw-bold">Core</a>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge badge-md text-bg-light">Avalanche</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item border rounded d-flex gap-3 p-4 bg-body-secondary-hover">
                            <div class="icon flex-none">
                                <img src="assets/img/wallets/glow.svg" class="w-rem-8 h-rem-8" alt="...">
                            </div>
                            <div class="d-flex align-items-center flex-fill">
                                <div>
                                    <a href="#" class="stretched-link text-heading text-sm fw-bold">Glow</a>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge badge-md text-bg-light">Solana</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-xs text-muted mt-6">By connecting wallet, you agree to Satoshi's <a href="#" class="fw-bold">Terms of Service</a></div>
                </div>
            </div>
        </div>
    </div>