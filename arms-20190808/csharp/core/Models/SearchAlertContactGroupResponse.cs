// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchAlertContactGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ContactGroups")]
        [Validation(Required=true)]
        public List<SearchAlertContactGroupResponseContactGroups> ContactGroups { get; set; }
        public class SearchAlertContactGroupResponseContactGroups : TeaModel {
            [NameInMap("ContactGroupId")]
            [Validation(Required=true)]
            public long ContactGroupId { get; set; }

            [NameInMap("ContactGroupName")]
            [Validation(Required=true)]
            public string ContactGroupName { get; set; }

            [NameInMap("UserId")]
            [Validation(Required=true)]
            public string UserId { get; set; }

            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public long CreateTime { get; set; }

            [NameInMap("UpdateTime")]
            [Validation(Required=true)]
            public long UpdateTime { get; set; }

        }

    }

}
