// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeParameterGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ParamGroup")]
        [Validation(Required=true)]
        public DescribeParameterGroupResponseParamGroup ParamGroup { get; set; }
        public class DescribeParameterGroupResponseParamGroup : TeaModel {
            [NameInMap("ParameterGroup")]
            [Validation(Required=true)]
            public List<DescribeParameterGroupResponseParamGroupParameterGroup> ParameterGroup { get; set; }
            public class DescribeParameterGroupResponseParamGroupParameterGroup : TeaModel {
                    public int? ParameterGroupType { get; set; }
                    public string ParameterGroupName { get; set; }
                    public int? ParamCounts { get; set; }
                    public string ParameterGroupDesc { get; set; }
                    public int? ForceRestart { get; set; }
                    public string Engine { get; set; }
                    public string EngineVersion { get; set; }
                    public string ParameterGroupId { get; set; }
                    public string CreateTime { get; set; }
                    public string UpdateTime { get; set; }
                    public DescribeParameterGroupResponseParamGroupParameterGroupParamDetail ParamDetail { get; set; }
                    public class DescribeParameterGroupResponseParamGroupParameterGroupParamDetail : TeaModel {
                        [NameInMap("ParameterDetail")]
                        [Validation(Required=true)]
                        public List<DescribeParameterGroupResponseParamGroupParameterGroupParamDetailParameterDetail> ParameterDetail { get; set; }
                        public class DescribeParameterGroupResponseParamGroupParameterGroupParamDetailParameterDetail : TeaModel {
                            [NameInMap("ParamName")]
                            [Validation(Required=true)]
                            public string ParamName { get; set; }

                            [NameInMap("ParamValue")]
                            [Validation(Required=true)]
                            public string ParamValue { get; set; }

                        }

                    }
            }
        };

    }

}
