@Vite('resources/views/components/sections/sponsorships/sponsorships.sass')

<section class="sponsorships-section">
    <h2 class="sponsorships-title">Sponsorship Packages</h2>

    <p class="sponsorships-description">Our sponsorship package offers branding, promotional opportunities, and
        visibility at our event, ideal for
        enhancing company presence and community engagement.</p>

    <div>
        <h5 class="table-title">Personal Sponsorship Package</h5>

        <table class="table-container">
            <thead class="table-head">
                <tr class="table-head-row">
                    <th class="table-head-item left-align-row">Membership Tier</th>
                    <th class="table-head-item"> Min. Seeds</th>
                    <th class="table-head-item"> Min. Buy</th>
                    <th class="table-head-item"> Benefits</th>
                    <th class="table-head-item"> Donors</th>
                    <th class="table-head-item"> Action</th>
                </tr>
            </thead>
            <tbody class="table-body">
                <tr class="table-body-row">
                    <td class="table-body-item font-weight-500 left-align-row display-flex align-items-center gap-10">
                        <img class="table-image-item" src="{{ Vite::asset('resources/images/icons/icon-1.png') }}"
                            alt="">
                        <p>Seedling Scout</p>
                    </td>
                    <td class="table-body-item">
                        5 Seeds
                    </td>
                    <td class="table-body-item">
                        IDR 75K
                    </td>
                    <td class="table-body-item">
                        Badge
                    </td>
                    <td class="table-body-item">
                        4,900 Donors
                    </td>
                    <td class="table-body-item">
                        <x-button title="Support Our Mission" size="small" classVariant="info" />
                    </td>
                </tr>
                <tr class="table-body-row table-row-active">
                    <td class="table-body-item font-weight-500 left-align-row display-flex align-items-center gap-10">
                        <img class="table-image-item" src="{{ Vite::asset('resources/images/icons/icon-2.png') }}"
                            alt="">
                        <p>Sapling Savior</p>
                    </td>
                    <td class="table-body-item">
                        10 Seeds
                    </td>
                    <td class="table-body-item">
                        IDR 150K
                    </td>
                    <td class="table-body-item">
                        Badge + Pin
                    </td>
                    <td class="table-body-item">
                        4,300 Donors
                    </td>
                    <td class="table-body-item">
                        <x-button title="Support Our Mission" size="small" classVariant="info" />
                    </td>
                </tr>
                <tr class="table-body-row ">
                    <td class="table-body-item font-weight-500 left-align-row display-flex align-items-center gap-10">
                        <img class="table-image-item" src="{{ Vite::asset('resources/images/icons/icon-3.png') }}"
                            alt="">
                        <p>Tree Titan</p>
                    </td>
                    <td class="table-body-item">
                        20 Seeds
                    </td>
                    <td class="table-body-item">
                        IDR 300K
                    </td>
                    <td class="table-body-item">
                        Badge + Pin
                    </td>
                    <td class="table-body-item">
                        15,000 Donors
                    </td>
                    <td class="table-body-item">
                        <x-button title="Support Our Mission" size="small" classVariant="info" />
                    </td>
                </tr>
                <tr class="table-body-row table-row-active">
                    <td class="table-body-item font-weight-500 left-align-row display-flex align-items-center gap-10">
                        <img class="table-image-item" src="{{ Vite::asset('resources/images/icons/icon-4.png') }}"
                            alt="">
                        <p>Mangrove Master</p>
                    </td>
                    <td class="table-body-item">
                        50 Seeds
                    </td>
                    <td class="table-body-item">
                        IDR 750K
                    </td>
                    <td class="table-body-item">
                        Badge + Pin + Bag
                    </td>
                    <td class="table-body-item">
                        5,000 Donors
                    </td>
                    <td class="table-body-item">
                        <x-button title="Support Our Mission" size="small" classVariant="info" />
                    </td>
                </tr>
                <tr class="table-body-row">
                    <td class="table-body-item font-weight-500 left-align-row display-flex align-items-center gap-10">
                        <img class="table-image-item" src="{{ Vite::asset('resources/images/icons/icon-5.png') }}"
                            alt="">
                        <p>Guardian of the Grove</p>
                    </td>
                    <td class="table-body-item">
                        100 Seeds
                    </td>
                    <td class="table-body-item">
                        IDR 1,500K
                    </td>
                    <td class="table-body-item">
                        Badge + Pin + Bag
                    </td>
                    <td class="table-body-item">
                        300 Donors
                    </td>
                    <td class="table-body-item">
                        <x-button title="Support Our Mission" size="small" classVariant="info" />
                    </td>
                </tr>
                <tr class="table-body-row table-row-active">
                    <td class="table-body-item font-weight-500 left-align-row display-flex align-items-center gap-10">
                        <img class="table-image-item" src="{{ Vite::asset('resources/images/icons/icon-6.png') }}"
                            alt="">
                        <p>Mangrove Maven</p>
                    </td>
                    <td class="table-body-item">
                        200 Seeds
                    </td>
                    <td class="table-body-item">
                        IDR 3,000K
                    </td>
                    <td class="table-body-item">
                        Badge + Pin + Bag
                    </td>
                    <td class="table-body-item">
                        10 Donors
                    </td>
                    <td class="table-body-item">
                        <x-button title="Support Our Mission" size="small" classVariant="info" />
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <hr class="divider">

    <div>
        <h5 class="table-title">Corporate Sponsorship Package</h5>

        <table class="table-container">
            <thead class="table-head">
                <tr class="table-head-row">
                    <th class="table-head-item">Benefits</th>
                    <th class="table-head-item"> Eco Trailblazers</th>
                    <th class="table-head-item"> Green Innovators</th>
                    <th class="table-head-item"> Eco Vanguard</th>
                </tr>
            </thead>
            <tbody class="table-body">
                <tr class="table-body-row">
                    <td class="table-body-item">
                        Price
                    </td>
                    <td class="table-body-item">
                        15 Million IDR
                    </td>
                    <td class="table-body-item">
                        30 Million IDR
                    </td>
                    <td class="table-body-item">
                        45 Million IDR
                    </td>
                </tr>

                <tr class="table-body-row table-row-active">
                    <td class="table-body-item">
                        CO2 Sequestration
                    </td>
                    <td class="table-body-item">
                        22,5 ton/year
                    </td>
                    <td class="table-body-item">
                        45 ton/year
                    </td>
                    <td class="table-body-item">
                        67,5 ton/year
                    </td>
                </tr>

                <tr class="table-body-row">
                    <td class="table-body-item">
                        Number of Tress
                    </td>
                    <td class="table-body-item">
                        1000 Trees
                    </td>
                    <td class="table-body-item">
                        2000 Trees
                    </td>
                    <td class="table-body-item">
                        3000 Trees
                    </td>
                </tr>

                <tr class="table-body-row table-row-active">
                    <td class="table-body-item">
                        Logo on JCI Banner
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                </tr>

                <tr class="table-body-row">
                    <td class="table-body-item">
                        Logo on Communal Stainless Plate
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                </tr>

                <tr class="table-body-row table-row-active">
                    <td class="table-body-item">
                        Considered as Main Sponsor
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                </tr>

                <tr class="table-body-row">
                    <td class="table-body-item">
                        Dedicated Stainless Plate
                    </td>
                    <td class="table-body-item">

                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                </tr>

                <tr class="table-body-row table-row-active">
                    <td class="table-body-item">
                        Report Update on Planted Trees
                    </td>
                    <td class="table-body-item">

                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                </tr>

                <tr class="table-body-row">
                    <td class="table-body-item">
                        Logo on Event Clothings
                    </td>
                    <td class="table-body-item">

                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                    <td class="table-body-item">
                        <img class="table-item-icon" src="{{ Vite::asset('resources/images/icons/check-icon.png') }}"
                            alt="">
                    </td>
                </tr>

                {{-- Footer --}}
                <tr class="table-footer">
                    <td class="table-footer-item">
                        Make a Donation
                    </td>
                    <td class="table-footer-item">
                        <x-button title="Support Our Mission" size="small" classVariant="info-outline" />
                    </td>
                    <td class="table-footer-item">
                        <x-button title="Support Our Mission" size="small" classVariant="info-outline" />
                    </td>
                    <td class="table-footer-item">
                        <x-button title="Support Our Mission" size="small" classVariant="info-outline" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
