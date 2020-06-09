// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
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
                    public string NetworkTypes { get; set; }
                    public DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEngines SupportedEngines { get; set; }
                    public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEngines : TeaModel {
                        [NameInMap("SupportedEngine")]
                        [Validation(Required=true)]
                        public List<DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngine> SupportedEngine { get; set; }
                        public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngine : TeaModel {
                            [NameInMap("Engine")]
                            [Validation(Required=true)]
                            public string Engine { get; set; }

                            [NameInMap("SupportedEngineVersions")]
                            [Validation(Required=true)]
                            public DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersions SupportedEngineVersions { get; set; }
                            public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersions : TeaModel {
                                [NameInMap("SupportedEngineVersion")]
                                [Validation(Required=true)]
                                public List<DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersion> SupportedEngineVersion { get; set; }
                                public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersion : TeaModel {
                                        public string Version { get; set; }
                                        public DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorys SupportedCategorys { get; set; }
                                        public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorys : TeaModel {
                                            [NameInMap("SupportedCategory")]
                                            [Validation(Required=true)]
                                            public List<DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategory> SupportedCategory { get; set; }
                                            public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategory : TeaModel {
                                                [NameInMap("Category")]
                                                [Validation(Required=true)]
                                                public string Category { get; set; }

                                                [NameInMap("SupportedStorageTypes")]
                                                [Validation(Required=true)]
                                                public DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypes SupportedStorageTypes { get; set; }
                                                public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypes : TeaModel {
                                                    [NameInMap("SupportedStorageType")]
                                                    [Validation(Required=true)]
                                                    public List<DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageType> SupportedStorageType { get; set; }
                                                    public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageType : TeaModel {
                                                            public string StorageType { get; set; }
                                                            public DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResources AvailableResources { get; set; }
                                                            public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResources : TeaModel {
                                                                [NameInMap("AvailableResource")]
                                                                [Validation(Required=true)]
                                                                public List<DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResource> AvailableResource { get; set; }
                                                                public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResource : TeaModel {
                                                                    [NameInMap("DBInstanceClass")]
                                                                    [Validation(Required=true)]
                                                                    public string DBInstanceClass { get; set; }

                                                                    [NameInMap("StorageRange")]
                                                                    [Validation(Required=true)]
                                                                    public string StorageRange { get; set; }

                                                                    [NameInMap("DBInstanceStorageRange")]
                                                                    [Validation(Required=true)]
                                                                    public DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResourceDBInstanceStorageRange DBInstanceStorageRange { get; set; }
                                                                    public class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResourceDBInstanceStorageRange : TeaModel {
                                                                        [NameInMap("Max")]
                                                                        [Validation(Required=true)]
                                                                        public int? Max { get; set; }
                                                                        [NameInMap("Min")]
                                                                        [Validation(Required=true)]
                                                                        public int? Min { get; set; }
                                                                        [NameInMap("Step")]
                                                                        [Validation(Required=true)]
                                                                        public int? Step { get; set; }
                                                                    };

                                                                }

                                                            }
                                                    }
                                                };

                                            }

                                        }
                                }
                            };

                        }

                    }
            }
        };

    }

}
