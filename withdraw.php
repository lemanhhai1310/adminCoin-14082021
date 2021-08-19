<?php $data["title"] = "Withdraw Crypto"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container desposit">
    <div class="uk-section-small">
        <div class="uk-margin desposit__margin1">
            <h2 class="uk-h2 desposit__title">Withdraw Crypto</h2>
            <div>
                <span class="desposit__backLink__icon" uk-icon="icon: chevron-left; ratio: 0.7"></span>
                <a href="" class="desposit__backLink uk-text-middle uk-link-toggle">Back to your wallet</a>
            </div>
        </div>

        <!--Enable Two-Factor Authentication (2FA)-->
        <div class="desposit__boxStep" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-auto@m">
                    <img src="images/Asset 1@2x.png" alt="">
                </div>
                <div class="uk-width-expand">
                    <h3 class="uk-h3">Enable Two-Factor Authentication (2FA)</h3>
                    <p>Activate at least one more authentication to increase your account security. Funds can be withdrawn once Two-Factor Authentication is enabled.</p>
                    <button class="uk-button uk-button-primary">Enable Now</button>
                </div>
            </div>
        </div>
        <!--/Enable Two-Factor Authentication (2FA)-->

        <!--Sellect coin-->
        <div class="uk-margin desposit__selectCoin uk-card uk-card-default uk-card-body uk-form-stacked">
            <div uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-margin desposit__selectCoin__margin">
                        <h3 class="uk-h3 desposit__selectCoin__title">Sellect coin</h3>
                        <div class="desposit__selectCoin__box">
                            <div class="uk-margin">
                                <label class="uk-form-label desposit__selectCoin__box__label" for="form-stacked-text">COINS</label>
                                <div class="uk-form-controls">
                                    <div class="uk-child-width-1-2 uk-child-width-expand@m uk-grid-4 uk-grid-match" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'name' => 'BTC',
                                                'desc' => 'Bitcoin',
                                            ),
                                            array(
                                                'name' => 'ETH',
                                                'desc' => 'Ethereum',
                                            ),
                                            array(
                                                'name' => 'USDT',
                                                'desc' => 'TetherUS',
                                            ),
                                            array(
                                                'name' => 'XLM',
                                                'desc' => 'Stellar Lumens',
                                            ),
                                            array(
                                                'name' => 'XLMS',
                                                'desc' => 'Stellar Lumens S',
                                            ),
                                        );
                                        foreach ($data as $k=>$v): ?>
                                        <div>
                                            <label>
                                                <input class="desposit__selectCoin__box__checkInput uk-radio uk-sortable-placeholder" name="radio2" type="radio" <?= ($k==0)?checked:'' ?>>
                                                <div class="desposit__selectCoin__box__cardCheck uk-height-1-1">
                                                    <div class="uk-flex-middle uk-grid-13" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <img style="width: 27px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="desposit__selectCoin__box__cardCheck__name"><?= $v['name'] ?></div>
                                                            <div class="desposit__selectCoin__box__cardCheck__desc line-clamp-1"><?= $v['desc'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin desposit__selectCoin__margin">
                        <h3 class="uk-h3 desposit__selectCoin__title">Withdraw to</h3>
                        <div class="desposit__selectCoin__box">
                            <div class="uk-margin">
                                <label style="margin-bottom: 4px;" class="uk-form-label desposit__selectCoin__box__label" for="form-stacked-text">NETWORK</label>
                                <div class="desposit__selectCoin__box__desc">Ensure the network you choose to deposit matches the withdrawal network, or assets may be lost.</div>
                            </div>
                            <div class="uk-margin">
                                <div class="desposit__selectCoin__box__select">
                                    <select name="foo" class="uk-sortable-placeholder">
                                        <option value="">Select withdrawal network</option>
                                        <option value="1">Desposit</option>
                                        <option value="2">Withdraw</option>
                                        <option value="3">Transfer</option>
                                        <option value="4">Exchange</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label desposit__selectCoin__box__label" for="form-stacked-text">ADdRESS</label>
                                <div class="uk-form-controls">
                                    <div class="uk-child-width-auto uk-grid-10" uk-grid>
                                        <div>
                                            <span class="desposit__selectCoin__box__address">0x716d9d96d80d8a5164d5b23e2b689b0ed988f87c</span>
                                        </div>
                                        <div>
                                            <a class="desposit__selectCoin__box__address__link" href=""><i class="fa fa-clone" aria-hidden="true"></i></a>
                                        </div>
                                        <div>
                                            <a class="desposit__selectCoin__box__address__link" href=""><i class="fa fa-qrcode" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <ul class="uk-list uk-list-circle desposit__selectCoin__box__note">
                                    <li>Send only BNB to this deposit address.</li>
                                    <li>Ensure the network is <span>TRC20</span> (Stellar Lumens).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <h3 class="uk-h3 desposit__selectCoin__faqBox__title">F.A.Q</h3>
                    <ul class="uk-list">
                        <?php
                        $data = array(
                            'Video Tutorial',
                            'SIB 2FA Guide / Google 2FA Guide',
                            'Supported SMS countries',
                            'Using a YubiKey for Two-Factor Authentication (2FA)',
                            'Not Receiving SMS Auth Codes',
                        );
                        foreach ($data as $k=>$v): ?>
                        <li>
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <div>
                                        <?php if ($k==0): ?>
                                            <span class="desposit__selectCoin__faqBox__list__icon" uk-icon="icon: play-circle; ratio: 1"></span>
                                        <?php else: ?>
                                            <span class="desposit__selectCoin__faqBox__list__icon" uk-icon="icon: file; ratio: 1"></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <a href="" class="uk-link-toggle desposit__selectCoin__faqBox__list__a"><?= $v ?></a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--/Sellect coin-->

        <!--Total Withdraw-->
        <div class="uk-margin uk-card uk-card-body uk-card-default desposit__totalDeposited">
            <h2 class="uk-h2 desposit__totalDeposited__title">Total Withdraw</h2>
            <div class="uk-grid-10 uk-child-width-1-5@m uk-child-width-1-1 uk-grid-match" uk-grid>
                <?php
                $data = array('BTC','ETH','USDT','XLM','XLMS');
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="uk-text-center desposit__totalDeposited__card">
                        <div class="uk-child-width-auto uk-grid-5 uk-flex-center uk-flex-middle" uk-grid>
                            <div><img style="width: 24px;" src="images/Coins/Bitcoin-Logo@2x.png" alt=""></div>
                            <div><span class="desposit__totalDeposited__card__txt"><?= $v ?></span></div>
                        </div>
                        <div class="desposit__totalDeposited__card__number">0.2304020202</div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--/Total Withdraw-->

        <!--Recent Withdraw-->
        <div class="uk-margin uk-card uk-card-body uk-card-default">
            <h2 class="uk-h2 desposit__totalDeposited__title">Recent Withdraw</h2>
            <div class="wallet__Transaction__filter">
                <div class="uk-child-width-1-2 uk-child-width-auto@s uk-grid-small uk-grid-20-m" uk-grid>
                    <div>
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                            <input class="uk-input time_range" type="text" placeholder="Time">
                        </div>
                    </div>
                    <div>
                        <div class="filterOption">
                            <select name="foo" class="uk-sortable-placeholder">
                                <option value="">Asset</option>
                                <option value="1">BTC</option>
                                <option value="2">ETH</option>
                                <option value="3">USDT</option>
                                <option value="4">XLM</option>
                                <option value="5">XLMS</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="filterOption">
                            <select name="foo" class="uk-sortable-placeholder">
                                <option value="">Status</option>
                                <option value="1">Completed</option>
                                <option value="2">Pending</option>
                                <option value="3">Cancel</option>
                            </select>
                        </div>
                    </div>
                    <div class="uk-width-expand@s">

                    </div>
                    <div>
                        <a href="" class="desposit__recentDeposits__link">Withdraw hasn't arrived? Click here</a>
                    </div>
                </div>
            </div>
            <div uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)">
                <table class="uk-table uk-table-middle uk-table-divider myacc__asset__table">
                    <thead>
                    <tr>
                        <th>Time</th>
                        <th>COIN</th>
                        <th>amount</th>
                        <th>Address</th>
                        <th>TXID</th>
                        <th>STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $status=array('Completed','Pending','Cancel');
                    ?>
                    <?php for ($i=0;$i<=8;$i++): ?>
                        <tr>
                            <td>
                                <span class="myacc__asset__table__txt">20-07-2020 13:30</span>
                            </td>
                            <td>
                                <div class="uk-child-width-auto uk-flex-middle uk-grid-5" uk-grid>
                                    <div>
                                        <img style="width: 16px" src="images/Coins/USDT Logo@2x.png" alt="">
                                    </div>
                                    <div>
                                        <span class="wallet__Transaction__txtAsset">USDT</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="wallet__Transaction__txtaMount">15,000</span>
                            </td>
                            <td>
                                <div class="uk-child-width-auto uk-grid-5" uk-grid>
                                    <div>
                                        <span class="desposit__recentDeposits__txt">TLw6Vash....7NKasD</span>
                                    </div>
                                    <div>
                                        <a href="" class="desposit__recentDeposits__link1"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div>
                                        <a href="" class="desposit__recentDeposits__link1"><i class="fa fa-clone" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="uk-child-width-auto uk-grid-5" uk-grid>
                                    <div>
                                        <span class="desposit__recentDeposits__txt">06e917...b9fa69</span>
                                    </div>
                                    <div>
                                        <a href="" class="desposit__recentDeposits__link1"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div>
                                        <a href="" class="desposit__recentDeposits__link1"><i class="fa fa-clone" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <?php if ($status[array_rand($status)] === 'Completed'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #3fc03b;">Completed</span>
                                <?php elseif ($status[array_rand($status)] === 'Pending'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #f6b64a;">Pending</span>
                                <?php elseif ($status[array_rand($status)] === 'Cancel'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #e86666;">Cancel</span>
                                <?php else: ?>
                                    <span class="wallet__Transaction__txtStatus">N/A</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/Recent Withdraw-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>