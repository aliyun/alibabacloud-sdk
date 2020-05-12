// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class GetRandomPasswordRequest : TeaModel {
        [NameInMap("PasswordLength")]
        [Validation(Required=false)]
        public string PasswordLength { get; set; }

        [NameInMap("ExcludeCharacters")]
        [Validation(Required=false)]
        public string ExcludeCharacters { get; set; }

        [NameInMap("ExcludeLowercase")]
        [Validation(Required=false)]
        public string ExcludeLowercase { get; set; }

        [NameInMap("ExcludeUppercase")]
        [Validation(Required=false)]
        public string ExcludeUppercase { get; set; }

        [NameInMap("ExcludeNumbers")]
        [Validation(Required=false)]
        public string ExcludeNumbers { get; set; }

        [NameInMap("ExcludePunctuation")]
        [Validation(Required=false)]
        public string ExcludePunctuation { get; set; }

        [NameInMap("RequireEachIncludedType")]
        [Validation(Required=false)]
        public string RequireEachIncludedType { get; set; }

    }

}
