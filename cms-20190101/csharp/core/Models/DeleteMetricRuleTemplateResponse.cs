// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteMetricRuleTemplateResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public int? Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Resource")]
        [Validation(Required=true)]
        public DeleteMetricRuleTemplateResponseResource Resource { get; set; }
        public class DeleteMetricRuleTemplateResponseResource : TeaModel {
            [NameInMap("TemplateId")]
            [Validation(Required=true)]
            public string TemplateId { get; set; }
        };

    }

}
