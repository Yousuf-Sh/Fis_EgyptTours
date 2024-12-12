            <div class="col-lg-3">
                <div class="">
                <div class="feature-tab">
    <a href="{{ route('offers.services_details', ['id' => $offer->id]) }}">Tours Detail</a>
</div>
                    <div class="feature-tab">
                        <a href="{{route('offers.tour_description', ['id' => $offer->id])}}">Tours Description</a>
                    </div>
                    <div class="feature-tab">
                        <a href="{{route('offers.tour_highlights', ['id' => $offer->id])}}">Tour Highlights</a>
                    </div>
                    <div class="feature-tab">
                        <a href="{{route('offers.tour_inclusions_exclusions', ['id' => $offer->id])}}">Tour Inclusions and Exclusions</a>
                    </div>
                    <div class="feature-tab">
                        <a href="{{route('offers.tour_ltinerary', ['id' => $offer->id])}}">Tour Itinerary</a>
                    </div>
                    <!-- <div class="feature-tab">
                        <a href="{{route('offers.index')}}">Book with us</a>
                    </div> -->
                    <div class="feature-tab">
                        <a href="{{route('offers.packages', ['id' => $offer->id])}}">Packages</a>
                    </div>
                    <div class="feature-tab">
                        <a href="{{route('offers.gallery', ['id' => $offer->id])}}">Gallery</a>
                    </div>
                    <div class="feature-tab">
                        <a href="{{route('offers.reviews', ['id' => $offer->id])}}">Video Reviews</a>
                    </div>
                </div>
            </div>