// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDeploymentSetsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("DeploymentSets")]
        [Validation(Required=true)]
        public DescribeDeploymentSetsResponseDeploymentSets DeploymentSets { get; set; }
        public class DescribeDeploymentSetsResponseDeploymentSets : TeaModel {
            [NameInMap("DeploymentSet")]
            [Validation(Required=true)]
            public List<DescribeDeploymentSetsResponseDeploymentSetsDeploymentSet> DeploymentSet { get; set; }
            public class DescribeDeploymentSetsResponseDeploymentSetsDeploymentSet : TeaModel {
                    public string DeploymentSetId { get; set; }
                    public string DeploymentSetDescription { get; set; }
                    public string DeploymentSetName { get; set; }
                    public string Strategy { get; set; }
                    public string DeploymentStrategy { get; set; }
                    public string Domain { get; set; }
                    public string Granularity { get; set; }
                    public int? GroupCount { get; set; }
                    public int? InstanceAmount { get; set; }
                    public string CreationTime { get; set; }
                    public DescribeDeploymentSetsResponseDeploymentSetsDeploymentSetInstanceIds InstanceIds { get; set; }
                    public class DescribeDeploymentSetsResponseDeploymentSetsDeploymentSetInstanceIds : TeaModel {
                        [NameInMap("InstanceId")]
                        [Validation(Required=true)]
                        public List<string> InstanceId { get; set; }

                    }
            }
        };

    }

}
