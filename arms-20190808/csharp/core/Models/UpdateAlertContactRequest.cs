// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class UpdateAlertContactRequest : TeaModel {
        [NameInMap("ContactName")]
        [Validation(Required=false)]
        public string ContactName { get; set; }

        [NameInMap("PhoneNum")]
        [Validation(Required=false)]
        public string PhoneNum { get; set; }

        [NameInMap("Email")]
        [Validation(Required=false)]
        public string Email { get; set; }

        [NameInMap("DingRobotWebhookUrl")]
        [Validation(Required=false)]
        public string DingRobotWebhookUrl { get; set; }

        [NameInMap("SystemNoc")]
        [Validation(Required=false)]
        public bool? SystemNoc { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ProxyUserId")]
        [Validation(Required=false)]
        public string ProxyUserId { get; set; }

        [NameInMap("ContactId")]
        [Validation(Required=true)]
        public long ContactId { get; set; }

    }

}
