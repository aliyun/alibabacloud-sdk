// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeParameterGroupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SignalForOptimizeParams")]
        [Validation(Required=true)]
        public bool? SignalForOptimizeParams { get; set; }

        [NameInMap("ParameterGroups")]
        [Validation(Required=true)]
        public DescribeParameterGroupsResponseParameterGroups ParameterGroups { get; set; }
        public class DescribeParameterGroupsResponseParameterGroups : TeaModel {
            [NameInMap("ParameterGroup")]
            [Validation(Required=true)]
            public List<DescribeParameterGroupsResponseParameterGroupsParameterGroup> ParameterGroup { get; set; }
            public class DescribeParameterGroupsResponseParameterGroupsParameterGroup : TeaModel {
                    public int? ParameterGroupType { get; set; }
                    public string ParameterGroupName { get; set; }
                    public int? ParamCounts { get; set; }
                    public string ParameterGroupDesc { get; set; }
                    public int? ForceRestart { get; set; }
                    public string Engine { get; set; }
                    public string EngineVersion { get; set; }
                    public string CreateTime { get; set; }
                    public string UpdateTime { get; set; }
                    public string ParameterGroupId { get; set; }
            }
        };

    }

}
