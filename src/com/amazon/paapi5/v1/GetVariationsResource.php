<?php

/**
 * Copyright 2020 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1;

use Amazon\ProductAdvertisingAPI\v1\ObjectSerializer;

/**
 * GetVariationsResource Class Doc Comment
 *
 * @category Class
 * @package  Amazon\ProductAdvertisingAPI\v1
 * @author   Product Advertising API team
 */
class GetVariationsResource
{
    /**
     * Possible values of this enum
     */
    public const BROWSE_NODE_INFOBROWSE_NODES = 'BrowseNodeInfo.BrowseNodes';
    public const BROWSE_NODE_INFOBROWSE_NODESANCESTOR = 'BrowseNodeInfo.BrowseNodes.Ancestor';
    public const BROWSE_NODE_INFOBROWSE_NODESSALES_RANK = 'BrowseNodeInfo.BrowseNodes.SalesRank';
    public const BROWSE_NODE_INFOWEBSITE_SALES_RANK = 'BrowseNodeInfo.WebsiteSalesRank';
    public const CUSTOMER_REVIEWSCOUNT = 'CustomerReviews.Count';
    public const CUSTOMER_REVIEWSSTAR_RATING = 'CustomerReviews.StarRating';
    public const IMAGESPRIMARYSMALL = 'Images.Primary.Small';
    public const IMAGESPRIMARYMEDIUM = 'Images.Primary.Medium';
    public const IMAGESPRIMARYLARGE = 'Images.Primary.Large';
    public const IMAGESVARIANTSSMALL = 'Images.Variants.Small';
    public const IMAGESVARIANTSMEDIUM = 'Images.Variants.Medium';
    public const IMAGESVARIANTSLARGE = 'Images.Variants.Large';
    public const ITEM_INFOBY_LINE_INFO = 'ItemInfo.ByLineInfo';
    public const ITEM_INFOCONTENT_INFO = 'ItemInfo.ContentInfo';
    public const ITEM_INFOCONTENT_RATING = 'ItemInfo.ContentRating';
    public const ITEM_INFOCLASSIFICATIONS = 'ItemInfo.Classifications';
    public const ITEM_INFOEXTERNAL_IDS = 'ItemInfo.ExternalIds';
    public const ITEM_INFOFEATURES = 'ItemInfo.Features';
    public const ITEM_INFOMANUFACTURE_INFO = 'ItemInfo.ManufactureInfo';
    public const ITEM_INFOPRODUCT_INFO = 'ItemInfo.ProductInfo';
    public const ITEM_INFOTECHNICAL_INFO = 'ItemInfo.TechnicalInfo';
    public const ITEM_INFOTITLE = 'ItemInfo.Title';
    public const ITEM_INFOTRADE_IN_INFO = 'ItemInfo.TradeInInfo';
    public const OFFERSLISTINGSAVAILABILITYMAX_ORDER_QUANTITY = 'Offers.Listings.Availability.MaxOrderQuantity';
    public const OFFERSLISTINGSAVAILABILITYMESSAGE = 'Offers.Listings.Availability.Message';
    public const OFFERSLISTINGSAVAILABILITYMIN_ORDER_QUANTITY = 'Offers.Listings.Availability.MinOrderQuantity';
    public const OFFERSLISTINGSAVAILABILITYTYPE = 'Offers.Listings.Availability.Type';
    public const OFFERSLISTINGSCONDITION = 'Offers.Listings.Condition';
    public const OFFERSLISTINGSCONDITIONCONDITION_NOTE = 'Offers.Listings.Condition.ConditionNote';
    public const OFFERSLISTINGSCONDITIONSUB_CONDITION = 'Offers.Listings.Condition.SubCondition';
    public const OFFERSLISTINGSDELIVERY_INFOIS_AMAZON_FULFILLED = 'Offers.Listings.DeliveryInfo.IsAmazonFulfilled';
    public const OFFERSLISTINGSDELIVERY_INFOIS_FREE_SHIPPING_ELIGIBLE = 'Offers.Listings.DeliveryInfo.IsFreeShippingEligible';
    public const OFFERSLISTINGSDELIVERY_INFOIS_PRIME_ELIGIBLE = 'Offers.Listings.DeliveryInfo.IsPrimeEligible';
    public const OFFERSLISTINGSDELIVERY_INFOSHIPPING_CHARGES = 'Offers.Listings.DeliveryInfo.ShippingCharges';
    public const OFFERSLISTINGSIS_BUY_BOX_WINNER = 'Offers.Listings.IsBuyBoxWinner';
    public const OFFERSLISTINGSLOYALTY_POINTSPOINTS = 'Offers.Listings.LoyaltyPoints.Points';
    public const OFFERSLISTINGSMERCHANT_INFO = 'Offers.Listings.MerchantInfo';
    public const OFFERSLISTINGSPRICE = 'Offers.Listings.Price';
    public const OFFERSLISTINGSPROGRAM_ELIGIBILITYIS_PRIME_EXCLUSIVE = 'Offers.Listings.ProgramEligibility.IsPrimeExclusive';
    public const OFFERSLISTINGSPROGRAM_ELIGIBILITYIS_PRIME_PANTRY = 'Offers.Listings.ProgramEligibility.IsPrimePantry';
    public const OFFERSLISTINGSPROMOTIONS = 'Offers.Listings.Promotions';
    public const OFFERSLISTINGSSAVING_BASIS = 'Offers.Listings.SavingBasis';
    public const OFFERSSUMMARIESHIGHEST_PRICE = 'Offers.Summaries.HighestPrice';
    public const OFFERSSUMMARIESLOWEST_PRICE = 'Offers.Summaries.LowestPrice';
    public const OFFERSSUMMARIESOFFER_COUNT = 'Offers.Summaries.OfferCount';
    public const PARENT_ASIN = 'ParentASIN';
    public const RENTAL_OFFERSLISTINGSAVAILABILITYMAX_ORDER_QUANTITY = 'RentalOffers.Listings.Availability.MaxOrderQuantity';
    public const RENTAL_OFFERSLISTINGSAVAILABILITYMESSAGE = 'RentalOffers.Listings.Availability.Message';
    public const RENTAL_OFFERSLISTINGSAVAILABILITYMIN_ORDER_QUANTITY = 'RentalOffers.Listings.Availability.MinOrderQuantity';
    public const RENTAL_OFFERSLISTINGSAVAILABILITYTYPE = 'RentalOffers.Listings.Availability.Type';
    public const RENTAL_OFFERSLISTINGSBASE_PRICE = 'RentalOffers.Listings.BasePrice';
    public const RENTAL_OFFERSLISTINGSCONDITION = 'RentalOffers.Listings.Condition';
    public const RENTAL_OFFERSLISTINGSCONDITIONCONDITION_NOTE = 'RentalOffers.Listings.Condition.ConditionNote';
    public const RENTAL_OFFERSLISTINGSCONDITIONSUB_CONDITION = 'RentalOffers.Listings.Condition.SubCondition';
    public const RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_AMAZON_FULFILLED = 'RentalOffers.Listings.DeliveryInfo.IsAmazonFulfilled';
    public const RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_FREE_SHIPPING_ELIGIBLE = 'RentalOffers.Listings.DeliveryInfo.IsFreeShippingEligible';
    public const RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_PRIME_ELIGIBLE = 'RentalOffers.Listings.DeliveryInfo.IsPrimeEligible';
    public const RENTAL_OFFERSLISTINGSDELIVERY_INFOSHIPPING_CHARGES = 'RentalOffers.Listings.DeliveryInfo.ShippingCharges';
    public const RENTAL_OFFERSLISTINGSMERCHANT_INFO = 'RentalOffers.Listings.MerchantInfo';
    public const VARIATION_SUMMARYPRICEHIGHEST_PRICE = 'VariationSummary.Price.HighestPrice';
    public const VARIATION_SUMMARYPRICELOWEST_PRICE = 'VariationSummary.Price.LowestPrice';
    public const VARIATION_SUMMARYVARIATION_DIMENSION = 'VariationSummary.VariationDimension';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BROWSE_NODE_INFOBROWSE_NODES,
            self::BROWSE_NODE_INFOBROWSE_NODESANCESTOR,
            self::BROWSE_NODE_INFOBROWSE_NODESSALES_RANK,
            self::BROWSE_NODE_INFOWEBSITE_SALES_RANK,
            self::CUSTOMER_REVIEWSCOUNT,
            self::CUSTOMER_REVIEWSSTAR_RATING,
            self::IMAGESPRIMARYSMALL,
            self::IMAGESPRIMARYMEDIUM,
            self::IMAGESPRIMARYLARGE,
            self::IMAGESVARIANTSSMALL,
            self::IMAGESVARIANTSMEDIUM,
            self::IMAGESVARIANTSLARGE,
            self::ITEM_INFOBY_LINE_INFO,
            self::ITEM_INFOCONTENT_INFO,
            self::ITEM_INFOCONTENT_RATING,
            self::ITEM_INFOCLASSIFICATIONS,
            self::ITEM_INFOEXTERNAL_IDS,
            self::ITEM_INFOFEATURES,
            self::ITEM_INFOMANUFACTURE_INFO,
            self::ITEM_INFOPRODUCT_INFO,
            self::ITEM_INFOTECHNICAL_INFO,
            self::ITEM_INFOTITLE,
            self::ITEM_INFOTRADE_IN_INFO,
            self::OFFERSLISTINGSAVAILABILITYMAX_ORDER_QUANTITY,
            self::OFFERSLISTINGSAVAILABILITYMESSAGE,
            self::OFFERSLISTINGSAVAILABILITYMIN_ORDER_QUANTITY,
            self::OFFERSLISTINGSAVAILABILITYTYPE,
            self::OFFERSLISTINGSCONDITION,
            self::OFFERSLISTINGSCONDITIONCONDITION_NOTE,
            self::OFFERSLISTINGSCONDITIONSUB_CONDITION,
            self::OFFERSLISTINGSDELIVERY_INFOIS_AMAZON_FULFILLED,
            self::OFFERSLISTINGSDELIVERY_INFOIS_FREE_SHIPPING_ELIGIBLE,
            self::OFFERSLISTINGSDELIVERY_INFOIS_PRIME_ELIGIBLE,
            self::OFFERSLISTINGSDELIVERY_INFOSHIPPING_CHARGES,
            self::OFFERSLISTINGSIS_BUY_BOX_WINNER,
            self::OFFERSLISTINGSLOYALTY_POINTSPOINTS,
            self::OFFERSLISTINGSMERCHANT_INFO,
            self::OFFERSLISTINGSPRICE,
            self::OFFERSLISTINGSPROGRAM_ELIGIBILITYIS_PRIME_EXCLUSIVE,
            self::OFFERSLISTINGSPROGRAM_ELIGIBILITYIS_PRIME_PANTRY,
            self::OFFERSLISTINGSPROMOTIONS,
            self::OFFERSLISTINGSSAVING_BASIS,
            self::OFFERSSUMMARIESHIGHEST_PRICE,
            self::OFFERSSUMMARIESLOWEST_PRICE,
            self::OFFERSSUMMARIESOFFER_COUNT,
            self::PARENT_ASIN,
            self::RENTAL_OFFERSLISTINGSAVAILABILITYMAX_ORDER_QUANTITY,
            self::RENTAL_OFFERSLISTINGSAVAILABILITYMESSAGE,
            self::RENTAL_OFFERSLISTINGSAVAILABILITYMIN_ORDER_QUANTITY,
            self::RENTAL_OFFERSLISTINGSAVAILABILITYTYPE,
            self::RENTAL_OFFERSLISTINGSBASE_PRICE,
            self::RENTAL_OFFERSLISTINGSCONDITION,
            self::RENTAL_OFFERSLISTINGSCONDITIONCONDITION_NOTE,
            self::RENTAL_OFFERSLISTINGSCONDITIONSUB_CONDITION,
            self::RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_AMAZON_FULFILLED,
            self::RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_FREE_SHIPPING_ELIGIBLE,
            self::RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_PRIME_ELIGIBLE,
            self::RENTAL_OFFERSLISTINGSDELIVERY_INFOSHIPPING_CHARGES,
            self::RENTAL_OFFERSLISTINGSMERCHANT_INFO,
            self::VARIATION_SUMMARYPRICEHIGHEST_PRICE,
            self::VARIATION_SUMMARYPRICELOWEST_PRICE,
            self::VARIATION_SUMMARYVARIATION_DIMENSION,
        ];
    }
}
