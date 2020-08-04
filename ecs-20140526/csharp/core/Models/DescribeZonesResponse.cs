// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeZonesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Zones")]
        [Validation(Required=true)]
        public DescribeZonesResponseZones Zones { get; set; }
        public class DescribeZonesResponseZones : TeaModel {
            [NameInMap("Zone")]
            [Validation(Required=true)]
            public List<DescribeZonesResponseZonesZone> Zone { get; set; }
            public class DescribeZonesResponseZonesZone : TeaModel {
                    public string ZoneId { get; set; }
                    public string LocalName { get; set; }
                    public DescribeZonesResponseZonesZoneAvailableResources AvailableResources { get; set; }
                    public class DescribeZonesResponseZonesZoneAvailableResources : TeaModel {
                        [NameInMap("ResourcesInfo")]
                        [Validation(Required=true)]
                        public List<DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfo> ResourcesInfo { get; set; }
                        public class DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfo : TeaModel {
                            [NameInMap("IoOptimized")]
                            [Validation(Required=true)]
                            public bool? IoOptimized { get; set; }

                            [NameInMap("SystemDiskCategories")]
                            [Validation(Required=true)]
                            public DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoSystemDiskCategories SystemDiskCategories { get; set; }
                            public class DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoSystemDiskCategories : TeaModel {
                                [NameInMap("supportedSystemDiskCategory")]
                                [Validation(Required=true)]
                                public List<string> SupportedSystemDiskCategory { get; set; }
                            };

                            [NameInMap("DataDiskCategories")]
                            [Validation(Required=true)]
                            public DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoDataDiskCategories DataDiskCategories { get; set; }
                            public class DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoDataDiskCategories : TeaModel {
                                [NameInMap("supportedDataDiskCategory")]
                                [Validation(Required=true)]
                                public List<string> SupportedDataDiskCategory { get; set; }
                            };

                            [NameInMap("NetworkTypes")]
                            [Validation(Required=true)]
                            public DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoNetworkTypes NetworkTypes { get; set; }
                            public class DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoNetworkTypes : TeaModel {
                                [NameInMap("supportedNetworkCategory")]
                                [Validation(Required=true)]
                                public List<string> SupportedNetworkCategory { get; set; }
                            };

                            [NameInMap("InstanceTypes")]
                            [Validation(Required=true)]
                            public DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoInstanceTypes InstanceTypes { get; set; }
                            public class DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoInstanceTypes : TeaModel {
                                [NameInMap("supportedInstanceType")]
                                [Validation(Required=true)]
                                public List<string> SupportedInstanceType { get; set; }
                            };

                            [NameInMap("InstanceTypeFamilies")]
                            [Validation(Required=true)]
                            public DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoInstanceTypeFamilies InstanceTypeFamilies { get; set; }
                            public class DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoInstanceTypeFamilies : TeaModel {
                                [NameInMap("supportedInstanceTypeFamily")]
                                [Validation(Required=true)]
                                public List<string> SupportedInstanceTypeFamily { get; set; }
                            };

                            [NameInMap("InstanceGenerations")]
                            [Validation(Required=true)]
                            public DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoInstanceGenerations InstanceGenerations { get; set; }
                            public class DescribeZonesResponseZonesZoneAvailableResourcesResourcesInfoInstanceGenerations : TeaModel {
                                [NameInMap("supportedInstanceGeneration")]
                                [Validation(Required=true)]
                                public List<string> SupportedInstanceGeneration { get; set; }
                            };

                        }

                    }
                    public DescribeZonesResponseZonesZoneAvailableResourceCreation AvailableResourceCreation { get; set; }
                    public class DescribeZonesResponseZonesZoneAvailableResourceCreation : TeaModel {
                        [NameInMap("ResourceTypes")]
                        [Validation(Required=true)]
                        public List<string> ResourceTypes { get; set; }

                    }
                    public DescribeZonesResponseZonesZoneAvailableDiskCategories AvailableDiskCategories { get; set; }
                    public class DescribeZonesResponseZonesZoneAvailableDiskCategories : TeaModel {
                        [NameInMap("DiskCategories")]
                        [Validation(Required=true)]
                        public List<string> DiskCategories { get; set; }

                    }
                    public DescribeZonesResponseZonesZoneAvailableInstanceTypes AvailableInstanceTypes { get; set; }
                    public class DescribeZonesResponseZonesZoneAvailableInstanceTypes : TeaModel {
                        [NameInMap("InstanceTypes")]
                        [Validation(Required=true)]
                        public List<string> InstanceTypes { get; set; }

                    }
                    public DescribeZonesResponseZonesZoneAvailableVolumeCategories AvailableVolumeCategories { get; set; }
                    public class DescribeZonesResponseZonesZoneAvailableVolumeCategories : TeaModel {
                        [NameInMap("VolumeCategories")]
                        [Validation(Required=true)]
                        public List<string> VolumeCategories { get; set; }

                    }
                    public DescribeZonesResponseZonesZoneAvailableDedicatedHostTypes AvailableDedicatedHostTypes { get; set; }
                    public class DescribeZonesResponseZonesZoneAvailableDedicatedHostTypes : TeaModel {
                        [NameInMap("DedicatedHostType")]
                        [Validation(Required=true)]
                        public List<string> DedicatedHostType { get; set; }

                    }
                    public DescribeZonesResponseZonesZoneDedicatedHostGenerations DedicatedHostGenerations { get; set; }
                    public class DescribeZonesResponseZonesZoneDedicatedHostGenerations : TeaModel {
                        [NameInMap("DedicatedHostGeneration")]
                        [Validation(Required=true)]
                        public List<string> DedicatedHostGeneration { get; set; }

                    }
            }
        };

    }

}
