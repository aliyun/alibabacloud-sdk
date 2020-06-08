// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeParametersResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("EngineVersion")]
        [Validation(Required=true)]
        public string EngineVersion { get; set; }

        [NameInMap("ConfigParameters")]
        [Validation(Required=true)]
        public DescribeParametersResponseConfigParameters ConfigParameters { get; set; }
        public class DescribeParametersResponseConfigParameters : TeaModel {
            [NameInMap("DBInstanceParameter")]
            [Validation(Required=true)]
            public List<DescribeParametersResponseConfigParametersDBInstanceParameter> DBInstanceParameter { get; set; }
            public class DescribeParametersResponseConfigParametersDBInstanceParameter : TeaModel {
                    public string ParameterName { get; set; }
                    public string ParameterValue { get; set; }
                    public string ParameterDescription { get; set; }
            }
        };

        [NameInMap("RunningParameters")]
        [Validation(Required=true)]
        public DescribeParametersResponseRunningParameters RunningParameters { get; set; }
        public class DescribeParametersResponseRunningParameters : TeaModel {
            [NameInMap("DBInstanceParameter")]
            [Validation(Required=true)]
            public List<DescribeParametersResponseRunningParametersDBInstanceParameter> DBInstanceParameter { get; set; }
            public class DescribeParametersResponseRunningParametersDBInstanceParameter : TeaModel {
                    public string ParameterName { get; set; }
                    public string ParameterValue { get; set; }
                    public string ParameterDescription { get; set; }
            }
        };

    }

}
