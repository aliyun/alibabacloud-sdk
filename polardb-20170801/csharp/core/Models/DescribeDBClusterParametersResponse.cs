// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBClusterParametersResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("DBType")]
        [Validation(Required=true)]
        public string DBType { get; set; }

        [NameInMap("DBVersion")]
        [Validation(Required=true)]
        public string DBVersion { get; set; }

        [NameInMap("RunningParameters")]
        [Validation(Required=true)]
        public DescribeDBClusterParametersResponseRunningParameters RunningParameters { get; set; }
        public class DescribeDBClusterParametersResponseRunningParameters : TeaModel {
            [NameInMap("Parameter")]
            [Validation(Required=true)]
            public List<DescribeDBClusterParametersResponseRunningParametersParameter> Parameter { get; set; }
            public class DescribeDBClusterParametersResponseRunningParametersParameter : TeaModel {
                    public string ParameterName { get; set; }
                    public string DataType { get; set; }
                    public string DefaultParameterValue { get; set; }
                    public string ParameterValue { get; set; }
                    public bool? IsModifiable { get; set; }
                    public bool? ForceRestart { get; set; }
                    public string ParameterStatus { get; set; }
                    public string CheckingCode { get; set; }
                    public string ParameterDescription { get; set; }
            }
        };

    }

}
