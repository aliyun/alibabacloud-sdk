// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeParameterTemplatesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("EngineVersion")]
        [Validation(Required=true)]
        public string EngineVersion { get; set; }

        [NameInMap("ParameterCount")]
        [Validation(Required=true)]
        public string ParameterCount { get; set; }

        [NameInMap("Parameters")]
        [Validation(Required=true)]
        public DescribeParameterTemplatesResponseParameters Parameters { get; set; }
        public class DescribeParameterTemplatesResponseParameters : TeaModel {
            [NameInMap("TemplateRecord")]
            [Validation(Required=true)]
            public List<DescribeParameterTemplatesResponseParametersTemplateRecord> TemplateRecord { get; set; }
            public class DescribeParameterTemplatesResponseParametersTemplateRecord : TeaModel {
                    public string ParameterName { get; set; }
                    public string ParameterValue { get; set; }
                    public string ForceModify { get; set; }
                    public string ForceRestart { get; set; }
                    public string CheckingCode { get; set; }
                    public string ParameterDescription { get; set; }
            }
        };

    }

}
