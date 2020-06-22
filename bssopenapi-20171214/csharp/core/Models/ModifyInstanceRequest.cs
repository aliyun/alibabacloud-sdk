// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class ModifyInstanceRequest : TeaModel {
        [NameInMap("ProductCode")]
        [Validation(Required=true)]
        public string ProductCode { get; set; }

        [NameInMap("ProductType")]
        [Validation(Required=false)]
        public string ProductType { get; set; }

        [NameInMap("SubscriptionType")]
        [Validation(Required=true)]
        public string SubscriptionType { get; set; }

        [NameInMap("ModifyType")]
        [Validation(Required=true)]
        public string ModifyType { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=false)]
        public string InstanceId { get; set; }

        [NameInMap("Parameter")]
        [Validation(Required=false)]
        public List<ModifyInstanceRequestParameter> Parameter { get; set; }
        public class ModifyInstanceRequestParameter : TeaModel {
            [NameInMap("Code")]
            [Validation(Required=true)]
            public string Code { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
