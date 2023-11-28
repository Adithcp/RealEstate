<!-- <form action="{{ $actionUrl ?? RealEstateHelper::getPropertiesListPageUrl() }}" class="search-filter" data-ajax-url="{{ $ajaxUrl ?? route('public.properties') }}">
    <input type="hidden" name="type" value="{{ $type }}">
    <div class="space-y-5 registration-form text-dark text-start">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3 lg:gap-0">
            {!! Theme::partial('filters.keyword', compact('type')) !!}

            {!! Theme::partial('filters.location', compact('type')) !!}

            {!! Theme::partial('filters.type', compact('id', 'type')) !!}
        </div>

        <button type="button" class="flex items-center gap-2 toggle-advanced-search text-secondary hover:text-primary">
            {{ __('Advanced') }}
            <i class="mdi mdi-chevron-down-circle-outline"></i>
        </button>

        <div class="hidden space-y-5 transition-all duration-200 ease-in-out advanced-search">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4 lg:gap-0">
                {!! Theme::partial('filters.category', compact('id', 'type', 'categories')) !!}

                {!! Theme::partial('filters.bedroom', compact('id', 'type')) !!}

                {!! Theme::partial('filters.bathroom', compact('id', 'type')) !!}

                {!! Theme::partial('filters.floor', compact('id', 'type')) !!}
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4 lg:gap-0">
                {!! Theme::partial('filters.prices') !!}

                {!! Theme::partial('filters.squares') !!}
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:gap-0">
                {!! Theme::partial('filters.by-project', compact('type')) !!}
            </div>
        </div>

        <div class="grid items-center grid-cols-3 gap-2 md:flex">
            <button type="submit" class="col-span-2 btn bg-primary hover:bg-secondary border-primary hover:border-secondary text-white submit-btn w-full md:w-1/4 !h-12 rounded transition-all ease-in-out duration-200">
                <i class="mdi mdi-magnify me-2"></i>
                {{ __('Search') }}
            </button>

            <button type="button" class="col-span-1 md:mt-0 block md:inline-block w-full md:w-fit px-4 bg-slate-500 rounded text-white py-[0.70rem] hover:bg-slate-600 reset-filter">
                <i class="me-1 mdi mdi-refresh"></i>
                {{ __('Reset') }}
            </button>
        </div>
    </div>
</form> -->




<div @class(['grid grid-cols-1', 'mt-10' => 2])>
    <div class="_301c117f" aria-label="Mini search form">
        <div class="af236032"><button class="b2344d64 f76811b6 _85d801bc" aria-label="Property search">Property search</button>
            <div class="_77ceeb83"></div><button class="b2344d64 f76811b6" aria-label="Transactions">Dubai Transactions</button>
            <div class="_77ceeb83"></div><button class="b2344d64 f76811b6" aria-label="BayutGPT button">BayutGPT<span class="_478fc57b _002e7204">Beta</span></button>
        </div>
        <div class="_301c117f" aria-label="Mini search form">
            <div class="dd63c5c9 e4754d29 _5b75d6e0" aria-label="Mini form">
                <div class="_580fbeeb _87de3797 FilterDesign2022">
                    <div class="ad62c515 _325092f0 _4a6228f4 _213f033d FilterDesign2022" aria-label="Purpose filter" name="purpose">
                        <div onclick="showRent()" class="_9dc6d35d FilterDesign2022"><label class="_5176f8e1 FilterDesign2022" for="filter-title">purpose</label>
                            <div role="button" aria-haspopup="true" class="e7c6503c FilterDesign2022"><span class="ef5cccac FilterDesign2022"><span class="fontCompensation">Rent</span></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6" class="eedc221b FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg></div>
                                <div id="showRent" onclick="stopClick(event)" class="_3f35dbb9 FilterDesign2022 _0caec95d" role="listbox"><div><div class="_600a7e43"><div class="d237e614">Purpose</div><div role="listbox" class="_410dc5bd FilterDesign2022"><span aria-selected="false" class="d92d11c7 FilterDesign2022"><button aria-label="Buy" class="_933a9a61 FilterDesign2022 _234b4f07">Buy</button></span><span aria-selected="true" class="d92d11c7 FilterDesign2022"><button aria-label="Rent" class="_933a9a61 FilterDesign2022 _234b4f07 _8bfc3747">Rent</button></span></div></div><div class="_600a7e43" aria-label="Frequency filter"><div class="_15f47f89">Rent Frequency</div><ul class="_02b72c8a"><li role="button" class="_3efbf302 _6699eaa6">Yearly</li><li role="button" class="_3efbf302">Monthly</li><li role="button" class="_3efbf302">Weekly</li><li role="button" class="_3efbf302">Daily</li><li role="button" class="_3efbf302">Any</li></ul></div></div><div class="_16d0f56f FilterDesign2022"><button class="_2d04a3c4 FilterDesign2022" aria-label="Reset" onclick="buttonAction('reload','rent')">Reset</button><button class="_29a3713c" aria-label="Close" onclick="buttonAction('done','rent')">Done</button></div></div>
                        </div>
                    </div>
                    <div class="ad62c515 a544e6c5 _4a6228f4 FilterDesign2022" aria-label="Location filter" name="location">
                        <div class="_3fa626dc FilterDesign2022"><label class="_5176f8e1 FilterDesign2022" for="filter-title">location</label>
                            <div class="b9e5541a _6a3a3de9 _4f597301">
                                <div aria-label="Location filter" class="c97c9f73 _20376027 _3b14b7bd">
                                    <ul class="_3d1890e1"></ul><input onChange="addlocation(this)" type="text" value="" placeholder="Enter location" autoComplete="off" spellcheck="false" class="a41c4dcc FilterDesign2022 b8ab28f4" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ad62c515 _6cbbaf12 FilterDesign2022" style="display:none !important;" name="property type">
                        <div onclick="showResidential()" class="_9dc6d35d FilterDesign2022"><label class="_5176f8e1 FilterDesign2022" for="filter-title">property type</label>
                            <div role="button" aria-haspopup="true" aria-label="Category filter" class="e7c6503c FilterDesign2022"><span class="ef5cccac FilterDesign2022"><span class="fontCompensation">Residential</span></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6" class="eedc221b FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg></div>
                                <div id="showResidential" onclick="stopClick(event)" class="_3f35dbb9 FilterDesign2022 _4c9282ef FilterDesign2022" role="listbox"><div><div><ul class="fe6db599" name="Category picker"><div class="_1cef7b64 FilterDesign2022"><li class="_05b994c0 FilterDesign2022 e7e540d2">Residential</li><li class="_05b994c0 FilterDesign2022">Commercial</li></div><div><div class="_97ab0b50"><li class="_31a8085a FilterDesign2022">Apartment</li><li class="_31a8085a FilterDesign2022">Townhouse</li><li class="_31a8085a FilterDesign2022">Villa-Compound</li><li class="_31a8085a FilterDesign2022">Residential-Plot</li><li class="_31a8085a FilterDesign2022">Residential-Building</li></div><div class="_97ab0b50"><li class="_31a8085a FilterDesign2022">Villa</li><li class="_31a8085a FilterDesign2022">Penthouse</li><li class="_31a8085a FilterDesign2022">Hotel-Apartment</li><li class="_31a8085a FilterDesign2022">Residential-Floor</li></div></div></ul></div></div><div class="_16d0f56f FilterDesign2022"><button  onclick="buttonAction('reload','resi')" class="_2d04a3c4 FilterDesign2022" aria-label="Reset">Reset</button><button class="e59368ca" onclick="buttonAction('done','resi')" aria-label="Close">Done</button></div></div>
                        </div>
                    </div>
                </div>
                <div class="_580fbeeb _8a6c9954 FilterDesign2022">
                    <div aria-label="Beds &amp; Baths filter" class="_3a42e70b c87a4264 _4a6228f4 _213f033d">
                        <div onclick="showBedsNBaths()" class="caf57c92 FilterDesign2022"><label class="_84fd70d9 FilterDesign2022" for="filter-title">beds &amp; baths</label>
                            <div role="button" aria-haspopup="true" aria-label="Beds &amp; Baths filter" class="e7c6503c FilterDesign2022"><span class="ef5cccac FilterDesign2022"><span class="fontCompensation">Beds &amp; Baths</span></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6" class="eedc221b FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg></div>
                                <div id="showBedsNBaths" onclick="stopClick(event)" class="_0a772a68"><div class="_3f35dbb9 FilterDesign2022 _7ff7b946" role="listbox"><div><div class="_3158b7be">Beds</div><ul class="_7e22c61f" aria-label="Beds filter"><li role="button" class="_7e06e165">Studio</li><li role="button" class="_7e06e165">1</li><li role="button" class="_7e06e165">2</li><li role="button" class="_7e06e165">3</li><li role="button" class="_7e06e165">4</li><li role="button" class="_7e06e165">5</li><li role="button" class="_7e06e165">6</li><li role="button" class="_7e06e165">7</li><li role="button" class="_7e06e165">8</li></ul><div class="_8f1ef08d">Baths</div><ul class="_07d91eaa" aria-label="Baths filter"><li role="button" class="_9410b81c">1</li><li role="button" class="_9410b81c">2</li><li role="button" class="_9410b81c">3</li><li role="button" class="_9410b81c">4</li><li role="button" class="_9410b81c">5</li><li role="button" class="_9410b81c">6</li></ul></div><div class="_16d0f56f FilterDesign2022"><button onclick="buttonAction('reload','bed')" class="_2d04a3c4 FilterDesign2022" aria-label="Reset">Reset</button><button onclick="buttonAction('done','bed')" class="d01b9023" aria-label="Close">Done</button></div></div></div>                        </div>
                    </div>
                    <div class="de486af6 _4a6228f4">
                        <div class="ad62c515 _158a936b _4a6228f4 FilterDesign2022" aria-label="Area filter" name="AREA (sqft)">
                            <div onclick="showAreaSqft()" class="_9dc6d35d FilterDesign2022"><label class="_5176f8e1 FilterDesign2022" for="filter-title">AREA (sqft)</label>
                                <div role="button" aria-haspopup="true" aria-label="Area filter" class="e7c6503c FilterDesign2022"><span class="ef5cccac FilterDesign2022"><span class="fontCompensation">Area (sqft)</span></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6" class="eedc221b FilterDesign2022">
                                        <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                    </svg></div>
                                    <div id="showAreaSqft" onclick="stopClick(event)" class="_0a772a68"><div class="_3f35dbb9 FilterDesign2022 fdef0e1c FilterDesign2022" role="listbox"><div><div class="_813e6d60 FilterDesign2022"><div class="_90cecf69 FilterDesign2022"><span class="_5af635f0 FilterDesign2022">Minimum sqft</span><div id="activeInputContainer" class="_6d743a70"><div class="a0c631cb f2679835 FilterDesign2022"><input id="activeNumericInput" placeholder="0" class="fc3aef8f" locales="en-UK" spellcheck="false" value=""></div></div></div><div class="_90cecf69 FilterDesign2022"><span class="_5af635f0 FilterDesign2022">Maximum sqft</span><div id="inactiveInputContainer" class="_6d743a70"><div class="a0c631cb f2679835 FilterDesign2022"><input id="inactiveNumericInput" placeholder="Any" class="fc3aef8f" locales="en-UK" spellcheck="false" value=""></div></div></div></div></div><div class="_16d0f56f FilterDesign2022"><button class="_2d04a3c4 FilterDesign2022" aria-label="Reset" onclick="buttonAction('reload','sqft')">Reset</button><button class="_50c0c117" aria-label="Close" onclick="buttonAction('done','sqft')">Done</button></div></div></div>
                            </div>
                        </div>
                        <div class="ad62c515 fb35700b FilterDesign2022" aria-label="Price filter" name="Price (AED)">
                          <div onclick="showAreaPrice()" class="_9dc6d35d FilterDesign2022"><label class="_5176f8e1 FilterDesign2022" for="filter-title">AREA (sqft)</label>                                <div role="button" aria-haspopup="true" class="e7c6503c FilterDesign2022"><span class="ef5cccac FilterDesign2022"><span class="fontCompensation">Price (AED)</span></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6" class="eedc221b FilterDesign2022">
                                        <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                    </svg></div>
                                    <div id="showAreaPrice" onclick="stopClick(event)" class="_0a772a68"><div class="_3f35dbb9 FilterDesign2022 fdef0e1c FilterDesign2022" role="listbox"><div><div class="_813e6d60 FilterDesign2022"><div class="_90cecf69 FilterDesign2022"><span class="_5af635f0 FilterDesign2022">Minimum price</span><div id="activeInputContainer" class="_6d743a70"><div class="a0c631cb f2679835 FilterDesign2022"><input id="activeNumericInputPrice" placeholder="0" class="fc3aef8f" locales="en-UK" spellcheck="false" value=""></div></div></div><div class="_90cecf69 FilterDesign2022"><span class="_5af635f0 FilterDesign2022">Maximum price</span><div id="inactiveInputContainer" class="_6d743a70"><div class="a0c631cb f2679835 FilterDesign2022"><input id="inactiveNumericInputPrice" placeholder="Any" class="fc3aef8f" locales="en-UK" spellcheck="false" value=""></div></div></div></div></div><div class="_16d0f56f FilterDesign2022"><button class="_2d04a3c4 FilterDesign2022" aria-label="Reset" onclick="buttonAction('reload','price')">Reset</button><button class="_50c0c117" aria-label="Close" onclick="buttonAction('done','price')">Done</button></div></div></div>
                            </div>
                        </div>
                      </div><a id="homepagePropertyFilter" href="http://127.0.0.1:8080/properties/?" role="button" design="FilterDesign2022" language="en" class="c3901770 f6d94e28 FilterDesign2022" aria-label="Find button">Find</a>                </div>
                <div class="eeb4cd20" style="display: none !important;" aria-label="Drive Time">
                    <div class="_6a6236f7">Search 2.0</div>Find homes by drive time<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="_58fa6645" viewBox="0 0 32 32">
                        <path d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>


