// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeResourcesModificationResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AvailableZones")]
        [Validation(Required=true)]
        public DescribeResourcesModificationResponseAvailableZones AvailableZones { get; set; }
        public class DescribeResourcesModificationResponseAvailableZones : TeaModel {
            [NameInMap("AvailableZone")]
            [Validation(Required=true)]
            public List<DescribeResourcesModificationResponseAvailableZonesAvailableZone> AvailableZone { get; set; }
            public class DescribeResourcesModificationResponseAvailableZonesAvailableZone : TeaModel {
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
                    public string Status { get; set; }
                    public string StatusCategory { get; set; }
                    public DescribeResourcesModificationResponseAvailableZonesAvailableZoneAvailableResources AvailableResources { get; set; }
                    public class DescribeResourcesModificationResponseAvailableZonesAvailableZoneAvailableResources : TeaModel {
                        [NameInMap("AvailableResource")]
                        [Validation(Required=true)]
                        public List<DescribeResourcesModificationResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResource> AvailableResource { get; set; }
                        public class DescribeResourcesModificationResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResource : TeaModel {
                            [NameInMap("Type")]
                            [Validation(Required=true)]
                            public string Type { get; set; }

                            [NameInMap("SupportedResources")]
                            [Validation(Required=true)]
                            public DescribeResourcesModificationResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResourceSupportedResources SupportedResources { get; set; }
                            public class DescribeResourcesModificationResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResourceSupportedResources : TeaModel {
                                [NameInMap("SupportedResource")]
                                [Validation(Required=true)]
                                public List<DescribeResourcesModificationResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResourceSupportedResourcesSupportedResource> SupportedResource { get; set; }
                                public class DescribeResourcesModificationResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResourceSupportedResourcesSupportedResource : TeaModel {
                                        public string Value { get; set; }
                                        public string Status { get; set; }
                                        public string StatusCategory { get; set; }
                                        public int? Min { get; set; }
                                        public int? Max { get; set; }
                                        public string Unit { get; set; }
                                }
                            };

                        }

                    }
            }
        };

    }

}
