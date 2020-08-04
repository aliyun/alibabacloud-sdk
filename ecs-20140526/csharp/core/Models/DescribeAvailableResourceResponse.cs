// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeAvailableResourceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AvailableZones")]
        [Validation(Required=true)]
        public DescribeAvailableResourceResponseAvailableZones AvailableZones { get; set; }
        public class DescribeAvailableResourceResponseAvailableZones : TeaModel {
            [NameInMap("AvailableZone")]
            [Validation(Required=true)]
            public List<DescribeAvailableResourceResponseAvailableZonesAvailableZone> AvailableZone { get; set; }
            public class DescribeAvailableResourceResponseAvailableZonesAvailableZone : TeaModel {
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
                    public string Status { get; set; }
                    public string StatusCategory { get; set; }
                    public DescribeAvailableResourceResponseAvailableZonesAvailableZoneAvailableResources AvailableResources { get; set; }
                    public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneAvailableResources : TeaModel {
                        [NameInMap("AvailableResource")]
                        [Validation(Required=true)]
                        public List<DescribeAvailableResourceResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResource> AvailableResource { get; set; }
                        public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResource : TeaModel {
                            [NameInMap("Type")]
                            [Validation(Required=true)]
                            public string Type { get; set; }

                            [NameInMap("SupportedResources")]
                            [Validation(Required=true)]
                            public DescribeAvailableResourceResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResourceSupportedResources SupportedResources { get; set; }
                            public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResourceSupportedResources : TeaModel {
                                [NameInMap("SupportedResource")]
                                [Validation(Required=true)]
                                public List<DescribeAvailableResourceResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResourceSupportedResourcesSupportedResource> SupportedResource { get; set; }
                                public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneAvailableResourcesAvailableResourceSupportedResourcesSupportedResource : TeaModel {
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
