// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeAvailableZonesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AvailableZones")]
        [Validation(Required=true)]
        public List<DescribeAvailableZonesResponseAvailableZones> AvailableZones { get; set; }
        public class DescribeAvailableZonesResponseAvailableZones : TeaModel {
            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("ZoneId")]
            [Validation(Required=true)]
            public string ZoneId { get; set; }

            [NameInMap("NetworkTypes")]
            [Validation(Required=true)]
            public string NetworkTypes { get; set; }

            [NameInMap("SupportedEngines")]
            [Validation(Required=true)]
            public List<DescribeAvailableZonesResponseAvailableZonesSupportedEngines> SupportedEngines { get; set; }
            public class DescribeAvailableZonesResponseAvailableZonesSupportedEngines : TeaModel {
                [NameInMap("Engine")]
                [Validation(Required=true)]
                public string Engine { get; set; }

                [NameInMap("SupportedEngineVersions")]
                [Validation(Required=true)]
                public List<DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersions> SupportedEngineVersions { get; set; }
                public class DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersions : TeaModel {
                    [NameInMap("Version")]
                    [Validation(Required=true)]
                    public string Version { get; set; }

                    [NameInMap("SupportedCategorys")]
                    [Validation(Required=true)]
                    public List<DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorys> SupportedCategorys { get; set; }
                    public class DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorys : TeaModel {
                        [NameInMap("Category")]
                        [Validation(Required=true)]
                        public string Category { get; set; }

                        [NameInMap("SupportedStorageTypes")]
                        [Validation(Required=true)]
                        public List<DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorysSupportedStorageTypes> SupportedStorageTypes { get; set; }
                        public class DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorysSupportedStorageTypes : TeaModel {
                            [NameInMap("StorageType")]
                            [Validation(Required=true)]
                            public string StorageType { get; set; }

                        }

                    }

                }

            }

        }

    }

}
