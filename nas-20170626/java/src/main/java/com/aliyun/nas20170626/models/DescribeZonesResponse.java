// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeZonesResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Zones")
    @Validation(required = true)
    public DescribeZonesResponseZones zones;

    public static DescribeZonesResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeZonesResponse self = new DescribeZonesResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeZonesResponseZonesZoneCapacity extends TeaModel {
        @NameInMap("Protocol")
        @Validation(required = true)
        public java.util.List<String> protocol;

        public static DescribeZonesResponseZonesZoneCapacity build(java.util.Map<String, ?> map) throws Exception {
            DescribeZonesResponseZonesZoneCapacity self = new DescribeZonesResponseZonesZoneCapacity();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeZonesResponseZonesZonePerformance extends TeaModel {
        @NameInMap("Protocol")
        @Validation(required = true)
        public java.util.List<String> protocol;

        public static DescribeZonesResponseZonesZonePerformance build(java.util.Map<String, ?> map) throws Exception {
            DescribeZonesResponseZonesZonePerformance self = new DescribeZonesResponseZonesZonePerformance();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeZonesResponseZonesZone extends TeaModel {
        @NameInMap("ZoneId")
        @Validation(required = true)
        public String zoneId;

        @NameInMap("Capacity")
        @Validation(required = true)
        public DescribeZonesResponseZonesZoneCapacity capacity;

        @NameInMap("Performance")
        @Validation(required = true)
        public DescribeZonesResponseZonesZonePerformance performance;

        public static DescribeZonesResponseZonesZone build(java.util.Map<String, ?> map) throws Exception {
            DescribeZonesResponseZonesZone self = new DescribeZonesResponseZonesZone();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeZonesResponseZones extends TeaModel {
        @NameInMap("Zone")
        @Validation(required = true)
        public java.util.List<DescribeZonesResponseZonesZone> zone;

        public static DescribeZonesResponseZones build(java.util.Map<String, ?> map) throws Exception {
            DescribeZonesResponseZones self = new DescribeZonesResponseZones();
            return TeaModel.build(map, self);
        }

    }

}
