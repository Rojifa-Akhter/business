@extends('product.index')
@section('product')
{{-- banner section --}}
@include('product.banner')
{{-- product category section --}}
@include('product.product_category')

{{-- inquires of product --}}
<section class="container mb-4 custom-container">
    <div class="row">
        <div class="mb-4 col-lg-6 mb-lg-0">
            <div class="bg-white biz-box h-100">
                <div class="mb-0 border biz-box-title d-flex align-items-center justify-content-between">
                    <div class="inquires-product">
                        <h3>Latest Inquiries on Products</h3>
                    </div>
                </div>
                <div class="biz-box-content">
                    <div class="table-responsive">
                        <table class="table requirement-table requirement-table-sm text-lg-17" >
                            <thead class="border" >
                                <tr>
                                    <th style="width: 60%; min-width: 160px" scope="col" class="text-strong border-bottom-0">Inquiry On</th>
                                    <th scope="col" class="text-strong border-bottom-0 text-nowrap">Inquiry By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://b2bmap.com/products/gbl-wheel-cleaner" class="text-nowrap text-medium text-business-tertiary">GBL Wheel Cleaner</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/ro.png" alt="Romania"></span>
                                    <span class="text-nowrap" "="">Personal</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/products/wheat-flour-556274" class="text-nowrap text-medium text-business-tertiary">Wheat flour</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/cm.png" alt="Cameroon"></span>
                                    <span class="text-nowrap" "="">Intel Source</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/products/almond-flour-wholesale-fivio-brand" class="text-nowrap text-medium text-business-tertiary">Almond Flour Bulk Purchase...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/gb.png" alt="United Kingdom"></span>
                                    <span class="text-nowrap" "="">Agropaz</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/products/animal-wheat-feed-wheat-for-human-consumption" class="text-nowrap text-medium text-business-tertiary">Animal Wheat Feed &amp; Wheat f...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/in.png" alt="India"></span>
                                    <span class="text-nowrap" "="">Agropaz International Limit...</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/products/hydraulic-oil-hlp46" class="text-nowrap text-medium text-business-tertiary">Hydraulic Oil HLP-46 for Ef...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/ng.png" alt="Nigeria"></span>
                                    <span class="text-nowrap" "="">James Lukas</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/products/135-hydraulic-breaker-hammer-for-efficient-demolition" class="text-nowrap text-medium text-business-tertiary">135 Hydraulic Breaker Hamme...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/gb.png" alt="United Kingdom"></span>
                                    <span class="text-nowrap" "="">Jon Tan Consulting Uk</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/products/cerave-moisturizing-cream" class="text-nowrap text-medium text-business-tertiary">Cerave Moisturizing Cream</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/us.png" alt="United States"></span>
                                    <span class="text-nowrap" "="">Heyinz Llc</span>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="bg-white biz-box h-100">
                <div class="mb-0 border biz-box-title d-flex align-items-center justify-content-between">
                    <div class="inquires-leads">
                    <h2>Latest Inquiries on Buy Leads</h2>
                    </div>
                </div>
                <div class="biz-box-content">
                    <div class="table-responsive">
                        <table class="table requirement-table requirement-table-sm text-lg-17">
                            <thead class="border">
                                <tr>
                                    <th style="width: 60%; min-width: 160px" scope="col" class="text-strong border-bottom-0">Inquiry On</th>
                                    <th scope="col" class="text-strong border-bottom-0 text-nowrap">Inquiry By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/buy-requirement-ldpe-hdpe" class="text-nowrap text-medium text-business-tertiary">Purchase Requirement - LDPE...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/kz.png" alt="Kazakhstan"></span>
                                    <span class="text-nowrap" "="">Sazankurak Too</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/stocklot-men-t-shirts-children-wears-ladies-dresses" class="text-nowrap text-medium text-business-tertiary">Buy Requirement - Stocklot...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/bd.png" alt="Bangladesh"></span>
                                    <span class="text-nowrap" "="">Greenish</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/requirement-granular-urea-46n" class="text-nowrap text-medium text-business-tertiary">Purchase Requirement - Gran...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/in.png" alt="India"></span>
                                    <span class="text-nowrap" "="">Scp Exports</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/buy-double-paper-a4-70" class="text-nowrap text-medium text-business-tertiary">Buy Requirement - Double Pa...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/id.png" alt="Indonesia"></span>
                                    <span class="text-nowrap" "="">PT Pacs Paper</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/buy-coca-cola-330-ml-can" class="text-nowrap text-medium text-business-tertiary">Buy Requirement - Coca Cola...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/nl.png" alt="Netherlands"></span>
                                    <span class="text-nowrap" "="">Main Agri BV</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/fertilizer-sewing-machine-streetlight" class="text-nowrap text-medium text-business-tertiary">Fertilizer, Sewing Machine,...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/eg.png" alt="Egypt"></span>
                                    <span class="text-nowrap" "="">KIG Konnice</span>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/raw-pet-coke" class="text-nowrap text-medium text-business-tertiary">Buy Requirement for Raw Pet...</a></td>
                                    <td>
                                    <div class="d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/ae.png" alt="United Arab Emirates"></span>
                                    <span class="text-nowrap" "="">Jabel Al Hirah Jewellery L....</span>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mb-4 custom-container">
    <div class="row">
        <div class="mb-4 col-lg-6 mb-lg-0">
            <div class="text-white biz-box h-100 with-footer-content" style="padding-bottom: 78.8333px; background: #00112C;">
                <div class="d-flex align-items-center biz-box-title">
                    <div>
                    <h2 class="m-0 text-white">Suppliers &amp; Exporters</h2>
                    </div>
                </div>
                <div class="biz-box-content text-thin text-md-17">
                    <p> Boost Your Business Online - Expand Your Reach, Connect with buyers, Maximize Sales through B2B Marketplace</p>
                    <ul class="pl-4 pl-lg-5">
                        <li class="mb-2">
                        Market products to verified buyers effectively.
                        </li>
                        <li class="mb-2">
                        Connect directly with millions of B2B buyers.
                        </li>
                        <li class="mb-2">
                        Boost online visibility, attract targeted buyers.
                        </li>
                        <li class="mb-2">
                        Receive inquiries, sell directly, do more business.
                        </li>
                        <li class="mb-2">
                        Get new leads from B2B marketplace, maximize sales.
                        </li>
                        <li class="mb-2">
                        Digitize b2b marketing, grow business, sell directly.
                        </li>
                    </ul>
                </div>
                <div class="p-3 pb-4 text-center footer-content">
                    <a href="" class="px-5 btn btn-primary text-17"> Start Selling</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-white bg-theme biz-box h-100 with-footer-content" style="padding-bottom: 78.8333px; background: #00112C;">
                <div class="d-flex align-items-center biz-box-title">
                    <div>
                    <h2 class="m-0 text-white">Buyers &amp; Importers</h2>
                    </div>
                </div>
                <div class="biz-box-content text-thin text-md-17">
                    <p>Source Quality Products - Discover, Compare &amp; Connect with Top Suppliers for Custom Buying Needs</p>
                    <ul class="pl-4 pl-lg-5">
                        <li class="mb-2">
                        Source products from qualified suppliers worldwide.
                        </li>
                        <li class="mb-2">
                        Find product details and compare offers easily.
                        </li>
                        <li class="mb-2">
                        Meet custom buy requirements, trade effortlessly.
                        </li>
                        <li class="mb-2">
                        Request samples and quotes directly from suppliers.
                        </li>
                        <li class="mb-2">
                        Save time, effort &amp; money by comparing products and quotes.
                        </li>
                        <li class="mb-2">
                        Expand sourcing channel and secure supply chain
                        </li>
                    </ul>
                </div>
                <div class="p-3 pb-4 text-center footer-content text-lg-right">
                <a href="https://b2bmap.com/post-buy-requirement" class="px-5 btn btn-primary text-17"> Start Buying</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- supplier and requre section --}}
<section class="mb-4">
    <div class="container custom-container">
        <div class="row">
            <div class="mb-4 col-lg-4 mb-lg-0">
                <div class="bg-white biz-box d-flex flex-column h-100">
                    <div class="flex-fill">
                        <div class="biz-box-title">
                            <h2>New Suppliers</h2>
                        </div>
                        <div class="biz-box-content">
                            <ul class="px-3 list-unstyled">
                                <li class="mb-2 text-lg-18">
                                <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/in.png" alt="India"></span>
                                <a href="https://b2bmap.com/zebco-engineering-llp">Zebco Engineering LLP</a>
                                </li>
                                <li class="mb-2 text-lg-18">
                                <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/cn.png" alt="China"></span>
                                <a href="https://b2bmap.com/shenzhen-patrol-hawk-technology-co-ltd">Shenzhen Patrol Hawk Technology Co., Ltd.</a>
                                </li>
                                <li class="mb-2 text-lg-18">
                                <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/cn.png" alt="China"></span>
                                <a href="https://b2bmap.com/wuhan-mz-electronic-coltd">Wuhan MZ Electronic Co.,Ltd</a>
                                </li>
                                <li class="mb-2 text-lg-18">
                                <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/id.png" alt="Indonesia"></span>
                                <a href="https://b2bmap.com/wisnu-engine">Wisnu Engine</a>
                                </li>
                                <li class="mb-2 text-lg-18">
                                <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/cn.png" alt="China"></span>
                                <a href="https://b2bmap.com/qingdao-banghua-wire-cable-co-ltd">Qingdao Banghua Wire &amp; Cable Co., Ltd</a>
                                </li>
                                <li class="mb-2 text-lg-18">
                                <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/id.png" alt="Indonesia"></span>
                                <a href="https://b2bmap.com/nusacoco-manufacturing">Nusacoco Manufacturing</a>
                                </li>
                                <li class="mb-2 text-lg-18">
                                <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/pk.png" alt="Pakistan"></span>
                                <a href="https://b2bmap.com/dannys-store">Danny's Store</a>
                                </li>
                                <li class="mb-2 text-lg-18">
                                <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/vn.png" alt="Vietnam"></span>
                                <a href="https://b2bmap.com/nawon-food-and-beverage-company-limited">Nawon Food and Beverage Company Limited</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-4 text-center text-lg-right">
                    <a href="" class="px-4 btn btn-sm btn-primary">Join Free Now</a>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-lg-8 mb-lg-0">
                <div class="bg-white biz-box h-100">
                    <div class="mb-0 biz-box-title d-flex align-items-center justify-content-between">
                        <div>
                        <h2>Latest Buy Requirements</h2>
                        </div>
                    </div>
                    <div class="biz-box-content">
                        <div class="table-responsive">
                            <table class="table requirement-table text-lg-17">
                                <thead>
                                    <tr>
                                        <th style="min-width: 160px" scope="col" class="text-strong border-bottom-0 w-50">Buyer’s Requirements</th>
                                        <th scope="col" class="text-strong border-bottom-0 text-nowrap">Buyer From</th>
                                        <th scope="col" class="text-right text-strong border-bottom-0 text-nowrap">Posted on</th>
                                    </tr>
                                </thead>
                                <tbody class="t_body">
                                    <tr>
                                        <td><a href="https://b2bmap.com/buy-leads/buy-requirement-dried-banana" class="text-medium text-business-tertiary">Buy Requirement for DRIED BANANA</a></td>
                                        <td>
                                        <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/gb.png" alt="United Kingdom"></span>
                                        <span "="">United Kingdom</span>
                                        </td>
                                        <td class="text-right text-nowrap"> 03 Aug 2024 </td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://b2bmap.com/buy-leads/construction-engineering-equipment-and-supplies" class="text-medium text-business-tertiary">Buy Requirement - Construction Engineering Equipment and Supplies</a></td>
                                        <td>
                                        <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/gb.png" alt="United Kingdom"></span>
                                        <span "="">United Kingdom</span>
                                        </td>
                                        <td class="text-right text-nowrap"> 03 Aug 2024 </td>
                                    </tr>
                                    <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/buy-requirement-en590-10ppm" class="text-medium text-business-tertiary">Buy Requirement - EN590 10PPM</a></td>
                                    <td>
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/ru.png" alt="Russia"></span>
                                    <span "="">Russia</span>
                                    </td>
                                    <td class="text-right text-nowrap"> 03 Aug 2024 </td>
                                    </tr>
                                    <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/buy-requirement-soya-acid-oil" class="text-medium text-business-tertiary">Purchase Requirement - Soya Acid oil</a></td>
                                    <td>
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/in.png" alt="India"></span>
                                    <span "="">India</span>
                                    </td>
                                    <td class="text-right text-nowrap"> 03 Aug 2024 </td>
                                    </tr>
                                    <tr>
                                    <td><a href="https://b2bmap.com/buy-leads/en590-jet-fuel-petcoke-bitumen-d2-urea" class="text-medium text-business-tertiary">Buy Requirement - EN590, JET FUEL, PETCOKE, BITUMEN, D2, UREA</a></td>
                                    <td>
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/ru.png" alt="Russia"></span>
                                    <span "="">Russia</span>
                                    </td>
                                    <td class="text-right text-nowrap"> 03 Aug 2024 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- requirement post section --}}
<section>
    <div class="container custom-container">
        <div class="row">
            <div class="mb-4 col-lg-12 d-lg-down-none">
                <div class="p-4 bg-white border p-lg-5">
                    <div class="row">
                        <div class="mb-3 col-lg-6 mb-lg-0">
                            <div class="py-lg-4">
                                <div class="text-center text-secondary">
                                    <img src="/img/icon/penalty-card.svg" alt="" style="height: 60px; width:60px; color:#0a51c2;">
                                </div>
                                <h4 class="mt-4 mb-3 text-center text-thin">TELL US WHAT YOU NEED</h4>
                                <h4 class="text-center text-md-down-20 text-normal text-theme line-height-150"> Post your buy requirement &amp; get quotes from top manufacturers &amp; suppliers.</h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="py-3">
                                <form method="post" action="https://b2bmap.com/post-buy-offer-from-short-form">
                                
                                    <input type="hidden" name="_token" value="9x9I02AEMwtwibJXPNmJMoZ4odW0YntyhpKh0OBd">
                                    <div class="mb-3 form-group">
                                        <label class="text-lg-18 d-none text-muted">Product Name<span class="text-danger">*</span></label>
                                        <input type="text" name="title" id="title" value="" class="form-control text-md-down-14 rounded-0" placeholder="Enter product name ...">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label class="text-lg-18 d-none text-muted">Product Category <span class="text-danger">*</span></label>
                                        <div>
                                        <select name="cat_id" id="cat_id" class="form-control text-md-down-14 text-muted rounded-0">
                                            <option value="">-- Select Product Category --</option>
                                            <option value="7">Agro &amp; Agriculture</option>
                                            <option value="8">Apparel &amp; Fashion</option>
                                            <option value="9">Arts, Crafts &amp; Gifts</option>
                                            <option value="10">Automotive &amp; Automobile</option>
                                            <option value="12">Chemicals</option>
                                            <option value="13">Computer &amp; IT</option>
                                            <option value="14">Construction &amp; Real Estate</option>
                                            <option value="5">Electronics &amp; Electrical</option>
                                            <option value="15">Energy &amp; Power</option>
                                            <option value="6">Food &amp; Beverage</option>
                                            <option value="16">Furniture &amp; Decor</option>
                                            <option value="17">Health &amp; Medical</option>
                                            <option value="18">Home Appliances</option>
                                            <option value="22">Lights &amp; Lighting</option>
                                            <option value="19">Machinery &amp; Industrial Supplies</option>
                                            <option value="21">Minerals &amp; Raw Materials</option>
                                            <option value="20">Office Supplies</option>
                                            <option value="23">Paper, Printing &amp; Packaging</option>
                                            <option value="24">Rubber &amp; Plastic Products</option>
                                            <option value="25">Security &amp; Protection</option>
                                            <option value="26">Sports &amp; Entertainment</option>
                                            <option value="27">Textiles Leather &amp; Jute</option>
                                            <option value="28" selected="">Tools &amp; Hardware</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-lg-18 d-none text-muted">Describe Your Buying Requirement</label>
                                        <textarea rows="4" name="details" id="details" class="form-control text-md-down-14 form-control-md-down-large rounded-0" placeholder="Describe your buying requirement including specifications, sizes etc"></textarea>
                                    </div>
                                    <div class="mt-3 text-center pt-lg-3">
                                        <button type="submit" class="px-4 btn btn-primary btn-md-down-small rounded-0">Post Buy Requirement</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- grow business --}}
<section class="mb-5">
    <div class="container custom-container">
        <div class="row">
            <div class="mb-4 col-lg-7 mb-lg-0">
                <div class="bg-white biz-box h-100">
                    <div class="biz-box-title">
                        <h2 class="m-0">Grow Your Business With DOB</h2>
                    </div>
                    <div class="biz-box-content">
                        <p class="mb-0 text-justify">DOB is a Global B2B Marketplace and cross-border trade &amp; business platform dedicated to help small &amp; medium entrepreneurs to expand businesses worldwide. Our all-in-one B2B platform helps suppliers and buyers to find, connect and communicate - Directly! We promote suppliers business profile and their products, so buyers can easily find and source products from top suppliers. Grow your business with our easy to use b2b platform ... <a href="https://b2bmap.com/about-b2bmap" class="text-business-tertiary">About DOB</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-white biz-box h-100">
                    <div class="biz-box-title">
                        <h2 class="m-0">Regional Sites</h2>
                    </div>
                    <div class="biz-box-content">
                        <ul class="mb-0 list-unstyled row small-gutters">
                            <li class="mb-2 col-lg-4" style="order:  5 ">
                                <div class="py-2 d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/bd.png" alt="Bangladesh"></span>
                                    <a href="https://b2bmap.com/bangladesh" class="d-flex bg-lg-down-light-white text-medium text-muted">Bangladesh</a>
                                </div>
                            </li>
                            <li class="mb-2 col-lg-4" style="order:  1 ">
                                <div class="py-2 d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/cn.png" alt="China"></span>
                                    <a href="https://b2bmap.com/china" class="d-flex bg-lg-down-light-white text-medium text-muted">China</a>
                                </div>
                            </li>
                            <li class="mb-2 col-lg-4" style="order:  2 ">
                                <div class="py-2 d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/in.png" alt="India"></span>
                                    <a href="https://b2bmap.com/india" class="d-flex bg-lg-down-light-white text-medium text-muted">India</a>
                                </div>
                            </li>
                            <li class="mb-2 col-lg-4" style="order:  3 ">
                                <div class="py-2 d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/id.png" alt="Indonesia"></span>
                                    <a href="https://b2bmap.com/indonesia" class="d-flex bg-lg-down-light-white text-medium text-muted">Indonesia</a>
                                </div>
                            </li>
                            <li class="mb-2 col-lg-4" style="order:  4 ">
                                <div class="py-2 d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/my.png" alt="Malaysia"></span>
                                    <a href="https://b2bmap.com/malaysia" class="d-flex bg-lg-down-light-white text-medium text-muted">Malaysia</a>
                                </div>
                            </li>
                            <li class="mb-2 col-lg-4" style="order:  5 ">
                                <div class="py-2 d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/pk.png" alt="Pakistan"></span>
                                    <a href="https://b2bmap.com/pakistan" class="d-flex bg-lg-down-light-white text-medium text-muted">Pakistan</a>
                                </div>
                            </li>
                            <li class="mb-2 col-lg-4" style="order:  6 ">
                                <div class="py-2 d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/tw.png" alt="Taiwan"></span>
                                    <a href="https://b2bmap.com/taiwan" class="d-flex bg-lg-down-light-white text-medium text-muted">Taiwan</a>
                                </div>
                            </li>
                            <li class="mb-2 col-lg-4" style="order:  7 ">
                                <div class="py-2 d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/gb.png" alt="United Kingdom"></span>
                                    <a href="https://b2bmap.com/united-kingdom" class="d-flex bg-lg-down-light-white text-medium text-muted">United Kingdom</a>
                                </div>
                            </li>
                            <li class="mb-2 col-lg-4" style="order:  8 ">
                                <div class="py-2 d-flex">
                                    <span class="mr-1 mt-n05"><img src="https://b2bmap.com/public/flags/16x16/us.png" alt="United States"></span>
                                    <a href="https://b2bmap.com/united-states" class="d-flex bg-lg-down-light-white text-medium text-muted">United States</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection