// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class UpdateMonitorRequest : TeaModel {
        [NameInMap("CorpId")]
        [Validation(Required=false)]
        public string CorpId { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=false)]
        public string TaskId { get; set; }

        [NameInMap("RuleName")]
        [Validation(Required=false)]
        public string RuleName { get; set; }

        [NameInMap("DeviceOperateType")]
        [Validation(Required=false)]
        public string DeviceOperateType { get; set; }

        [NameInMap("DeviceList")]
        [Validation(Required=false)]
        public string DeviceList { get; set; }

        [NameInMap("PicOperateType")]
        [Validation(Required=false)]
        public string PicOperateType { get; set; }

        [NameInMap("PicList")]
        [Validation(Required=false)]
        public string PicList { get; set; }

        [NameInMap("AttributeOperateType")]
        [Validation(Required=false)]
        public string AttributeOperateType { get; set; }

        [NameInMap("AttributeName")]
        [Validation(Required=false)]
        public string AttributeName { get; set; }

        [NameInMap("AttributeValueList")]
        [Validation(Required=false)]
        public string AttributeValueList { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("RuleExpression")]
        [Validation(Required=false)]
        public string RuleExpression { get; set; }

    }

}
