// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class UpdateAlertContactGroupRequest : TeaModel {
        [NameInMap("ContactGroupName")]
        [Validation(Required=true)]
        public string ContactGroupName { get; set; }

        [NameInMap("ContactIds")]
        [Validation(Required=false)]
        public string ContactIds { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ProxyUserId")]
        [Validation(Required=false)]
        public string ProxyUserId { get; set; }

        [NameInMap("ContactGroupId")]
        [Validation(Required=true)]
        public long ContactGroupId { get; set; }

    }

}
