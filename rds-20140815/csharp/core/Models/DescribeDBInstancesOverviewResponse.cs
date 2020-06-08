// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstancesOverviewResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Regions")]
        [Validation(Required=true)]
        public DescribeDBInstancesOverviewResponseRegions Regions { get; set; }
        public class DescribeDBInstancesOverviewResponseRegions : TeaModel {
            [NameInMap("RegionModel")]
            [Validation(Required=true)]
            public List<DescribeDBInstancesOverviewResponseRegionsRegionModel> RegionModel { get; set; }
            public class DescribeDBInstancesOverviewResponseRegionsRegionModel : TeaModel {
                    public string Region { get; set; }
                    public string EngineCount { get; set; }
                    public int? TotalCount { get; set; }
                    public DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModels TypeModels { get; set; }
                    public class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModels : TeaModel {
                        [NameInMap("TypeModel")]
                        [Validation(Required=true)]
                        public List<DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModel> TypeModel { get; set; }
                        public class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModel : TeaModel {
                            [NameInMap("InstanceDateType")]
                            [Validation(Required=true)]
                            public string InstanceDateType { get; set; }

                            [NameInMap("Count")]
                            [Validation(Required=true)]
                            public int? Count { get; set; }

                            [NameInMap("InstanceModels")]
                            [Validation(Required=true)]
                            public DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModels InstanceModels { get; set; }
                            public class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModels : TeaModel {
                                [NameInMap("InstanceModel")]
                                [Validation(Required=true)]
                                public List<DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModelsInstanceModel> InstanceModel { get; set; }
                                public class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModelsInstanceModel : TeaModel {
                                        public string DBInstanceId { get; set; }
                                        public string Region { get; set; }
                                        public string ZoneId { get; set; }
                                        public string Engine { get; set; }
                                        public string PayType { get; set; }
                                        public string CreatedTime { get; set; }
                                        public string ExpireTime { get; set; }
                                        public string LockMode { get; set; }
                                        public string DBInstanceStatus { get; set; }
                                }
                            };

                        }

                    }
            }
        };

    }

}
